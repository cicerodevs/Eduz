<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use PagSeguro;
use App\Curso;
use App\User;
use Auth;
use DB;

class PagseguroController extends Controller
{
    //
    public function boleto(Request $req)
    {
       $dados  = \DB::table('cursos')->where('id','=','1')->get();
       foreach ($dados as $dado) {
       
       }
       $nome_completo = Auth::user()->nome.' '.Auth::user()->sobrenome ;
    	$pagseguro = PagSeguro::setReference('1')
		->setSenderInfo([
		  'senderName' => $nome_completo, //Deve conter nome e sobrenome
		  'senderPhone' => Auth::user()->telefone, //Código de área enviado junto com o telefone
		  'senderEmail' => Auth::user()->email,
		  'senderHash' => $req->pagseguro_token,
		  'senderCPF' => '08532622097' //Ou CNPJ se for Pessoa Júridica
		])
		->setShippingAddress([ // OPCIONAL
		  'shippingAddressStreet' => 'Rua/Avenida',
		  'shippingAddressNumber' => 'Número',
		  'shippingAddressDistrict' => 'Bairro',
		  'shippingAddressPostalCode' => '12345-678',
		  'shippingAddressCity' => 'Cidade',
		  'shippingAddressState' => 'DF'
		])
		->setItems([
		  [
		    'itemId' => $dado->id,
		    'itemDescription' => $dado->titulo,
		    'itemAmount' => $dado->valor, //Valor unitário
		    'itemQuantity' => '1', // Quantidade de itens
		  ],
		])
		->send([
		  'paymentMethod' => 'boleto'
		]);

		
		$gera_boleto = $pagseguro->paymentLink;
		return view('chekout.boleto', compact('gera_boleto'));
    }
    public function cartao()
    {
    	$senderInfo = array(
    'nome'      => 'Nome e Sobrenome',
    'email'     => 'email@provedor.com'
    'cpf'       => '22233344455',
    'telefone'  => '11 33884466'
);
$senderAddress = array(
    'rua'           => 'Rua Fulano de Tal',
    'numero'        => '555',
    'complemento'   => 'Opcional',
    'bairro'        => 'Bairro',
    'cep'           => '14222060',
    'cidade'        => 'Sao Paulo',
    'uf'            => 'SP'
);

$items = array(
    'item1' => [
        'id'        => '1',
        'name'      => 'Nome do Produto ou Serviço',
        'price'     => '120.50',
        'quantity'  => 1
    ]
);

PagSeguro::setSenderInfo($senderInfo)
->setSenderAddress($senderAddress)
->setItems($items)
->setTotalAmount('120.50')
->sendCreditCard();
    }

}
