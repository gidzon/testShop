<?php


namespace App\Http;
use App\Models\Cart;

class CartController extends Controller
{
    public function actionAddAjax($request, $response, $args)
    {
        $cart = new \App\Models\Cart($this->container->get('PDO'));
        $id = $args['id'];
        $carts = $cart->addProduct($id);

       $amount = new \App\Models\Cart($this->container->get('PDO'));


       $sum = $amount->countItems();
//       dd($sum);

       return $this->view('single', compact('sum', 'carts'));



    }
}