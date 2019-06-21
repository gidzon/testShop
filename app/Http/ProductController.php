<?php


namespace App\Http;

use App\Models\Product;


class ProductController extends Controller
{
    public function actionView($request, $response, $args)
    {
        $product = new \App\Models\Product($this->container->get('PDO'));
        $id = $args['id'];
        $products = $product->getProductById($id);
//        dd($products);

        $recomented = new \App\Models\Product($this->container->get('PDO'));
        $recomenteds = $recomented->getRecommendedProduct($id);
//        dd($recomenteds);

        return $this->view('single', compact('products', 'recomenteds'));
    }
}