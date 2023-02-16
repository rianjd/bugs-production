<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Pedido;
use App\Models\Endereco;

use App\Models\ItensPedido;
use Illuminate\Support\Facades\Hash;

use App\Services\VendaService;

use PagSeguro\Configuration\Configure;

class ProdutoController extends Controller
{
    private $_configs;

    public function __construct(){
        $this->_configs = new Configure();
        $this->_configs->setCharset("utf8");
        $this->_configs->setAccountCredentials(env('PAGSEGURO_EMAIL'), env('PAGSEGURO_TOKEN'));
        $this->_configs->setEnvironment(env('PAGSEGURO_AMBIENTE'));
        $this->_configs->setLog(true, storage_path('logs/pagseguro_'.date('Ymd'.'.log')));
    }

    public function getCredential(){
        return $this->_configs->getAccountCredentials();
    }

    public function index($filtro = null, Request $request){

        $listaCat = Categoria::all();
        $listaCateg = null;
        $queryProd = Produto::all();

        if ($filtro != null){
          $listaCateg = Categoria::where('id',$filtro)->get();
          $queryProd = Produto::where('categoria_id', $filtro)->get();
        }

        $listaProd = $queryProd;


        return view('paginas.acessorios')->with('listaCat', $listaCat)->with('listaProd', $listaProd)->with('listaCateg', $listaCateg);
    }

    public function adicionarCarrinho($idproduto = null, Request $request){
        $prod = Produto::find($idproduto);
        //dd($request['color'],$request['extra']);
        if ($prod){
            if (!empty(session('cart'))){
                foreach (session('cart') as $cart){
                    if ($prod->id == $cart['id']) {
                        $cart['quantidade'] += 1;
                        return redirect()->route('ver_Carrinho');
                    }
                }
            }

            $prod->quantidade = 1;
            $carrinho = session('cart', []);
            array_push($carrinho,$prod);
            session(['cart'=>$carrinho]);
        }
        return redirect()->route('ver_Carrinho');
    }

    public function verCarrinho(Request $request){
        $carrinho = session('cart' ,[]);

        $enderecoList = Endereco::where('usuario_id', \Auth::user()->id)->get();
        // $teste = [];
        // foreach ($carrinho as $car){
        //     if(!isset($teste[$car['id']])){
        //         $teste[$car['id']] = 1;
        //     }else{
        //         $teste[$car['id']] += 1;
        //     }
        // }

        $data = ['cart' => $carrinho];

        return view('paginas.carrinho', $data)->with('enderecoList', $enderecoList);
    }

    public function excluirCarrinho($indice = null, Request $request){
        $carrinho = session('cart' ,[]);

        if (isset($carrinho[$indice])){
            unset($carrinho[$indice]);
        }
        session(['cart' => $carrinho]);

        return redirect()->route('ver_Carrinho');
    }


    public function finalizarCarrinho(Request $req){


        $prods = session('cart' ,[]);

        $vendaService = new VendaService();
        $result = $vendaService->finalizarVenda($prods, \Auth::user());

        if ($result['status'] == 'success'){
            $credCard = new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();
            $credCard->setReference("PED_" . $result["idpedido"]);
            $credCard->setCurrency("BRL");

            foreach($prods as $p){
                $credCard->addItems()->withParameters(
                    $p->id,
                    $p->nome,
                    1,
                    number_format($p->valor,2,".","")
                );
            }

            $user = \Auth::user();
            $credCard->setSender()->setName($req->input('cnome'));
            $credCard->setSender()->setEmail($req->input('cemail'));
            $credCard->setSender()->setHash($req->input("hashseller"));
            $credCard->setSender()->setPhone()->withParameters($req->input('cddd'), $req->input('cnumero'));
            $credCard->setSender()->setDocument()->withParameters("CPF", $user->cpf);

            $credCard->setShipping()->setAddress()->withParameters(
                $req->input('endereco'),
                $req->input('num'),
                $req->input('bairro'),
                $req->input('cep'),
                $req->input('cidade'),
                $req->input("uf"),
                'BRA',
                $req->input('complemento'),
            );
            $credCard->setShipping()->setCost()->withParameters($req->input('frete'));


            $credCard->setBilling()->setAddress()->withParameters(
                $req->input('endereco'),
                $req->input('num'),
                $req->input('bairro'),
                $req->input('cep'),
                $req->input('cidade'),
                $req->input("uf"),
                'BRA',
                $req->input('complemento'),
            );



            $credCard->setToken($req->input("cardtoken"));

            $nparcela = $req->input("nparcela");
            $totalapagar = $req->input("totalapagar");
            $totalparcela = $req->input("totalparcela");

            $credCard->setInstallment()->withParameters($nparcela, number_format($totalparcela,2,".",""));

            $credCard->setHolder()->setName($user->nome);
            $credCard->setHolder()->setDocument()->withParameters("CPF", $user->cpf);
            $credCard->setHolder()->setBirthdate('09/12/2003');
            $credCard->setHolder()->setPhone()->withParameters($req->input('cddd'), $req->input('cnumero'));

            $credCard->setMode("DEFAULT");
            $result = $credCard->register($this->getCredential());


            $req->session()->forget('cart');
            return back()->with('success','success');

        }else{
            return back()->withErrors(['error' => $result['erro']]);
        }




        //return back()->with('success','success');
    }

    public function historico(Request $request){

        $data = [];
        $idusuario = \Auth::user()->id;

        $listaPedido = Pedido::where("usuario_id", $idusuario)->orderBy("datapedido","desc")->get();
        //$valorPedido = ItensPedido::where("pedido_id", $listaPedido->id)->get();

        $data["listaP"] = $listaPedido;
        //$data["listaV"] = $valorPedido;


        return view('paginas.historico', $data);
    }

    public function detalhes(Request $request){

        $idpedido = $request->input("idpedido");

        $valorPedido = ItensPedido::join('produtos','produtos.id','=','itens_pedidos.produto_id')
                                    ->where("pedido_id", $idpedido)
                                    ->get();

        $data = ['valorPedido' => $valorPedido];

        return view("det.detalhes", $data);
    }


    public function pagar(Request $request){
        $data = [];
        $carrinho = session('cart' ,[]);

        $request->session()->put('frete',['frete' => $request['frete'], 'total' => $request['total'] , 'total_com_frete' => $request['total'] + $request['frete'] ]);
        $total_com_frete = $request->session()->get('frete');

        $data ['cart'] = $carrinho;

        return view("paginas.pagar", $data)->with('frete',$total_com_frete['frete'])->with('total_com_frete',$total_com_frete['total_com_frete'])->with('total',$total_com_frete['total']);
    }

    public function verProduto($filtro = null, Request $request){
        $produto = Produto::where('id', $filtro)->get();
        $data = ['produto'=> $produto];
        return view('paginas.produtos.produtos_page', $data);
    }

    public function categories($categoria = null, Request $request){
        $categ = $request->input("categ");

        $listaProd = Produtos::where("categoria_id", $categoria)->get();

        $data = ['listaProd' => $listaProd];

        return view("paginas.produtos.cat", $data);
    }

    public function pagarCredito(Request $request){
        $data = [];
        try{
            $enderecoList = Endereco::where('usuario_id', \Auth::user()->id)->get();
        }catch(\Throwable $e){
            return view('paginas.carrinho');
        }

        $carrinho = session('cart' ,[]);

        $data ['cart'] = $carrinho;
        $sessionCode = \PagSeguro\Services\Session::create(
            $this->getCredential()
        );
        $IDSession = $sessionCode->getResult();
        $data["sessionID"] = $IDSession;

        $total_com_frete = $request->session()->get('frete');

        return view("meio_de_pag.credito", $data)->with('frete',$total_com_frete['frete'])->with('enderecoList', $enderecoList)->with('total_com_frete',$total_com_frete['total_com_frete'])->with('total',$total_com_frete['total']);

    }


}
