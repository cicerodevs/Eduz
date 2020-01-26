<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Curso;
use PagSeguro; //Utilize a Facade


class CheckoutController extends Controller
{
    //Checkout de pagamento
     public function checkout($id)
    {

    	$curso =  Curso::find($id);
        return view('chekout.checkout', compact('curso'));
    }
    


}
