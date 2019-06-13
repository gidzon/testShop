<?php

namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\Product;

class IndexController extends Controller
{
    public function actionIndex($request, $response, $args)
    {


        $latestProduct = new \App\Models\Product($this->container->get('PDO'));
        $latestProducts = $latestProduct->getLatestProducts();
        foreach ($latestProducts as $latestProduct) {

        }

        $sliderProduct = new \App\Models\Product($this->container->get('PDO'));
        $sliderProducts = $sliderProduct->getRecommendedProducts();
        foreach ($sliderProducts as $sliderProduct) {
            dump($sliderProduct);

        }

        $category = new \App\Models\Category($this->container->get('PDO'));
        $categories = $category->getCategoryList();
        foreach ($categories as $category) {
//             dump($category);

        }

        return $this->view('index');
    }
}