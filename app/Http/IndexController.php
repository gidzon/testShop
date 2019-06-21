<?php


namespace App\Http;
use App\Models\Product;
use App\Models\Category;



class IndexController extends Controller
{
    public function actionIndex($request, $response, $args)
    {
        $latestProduct = new \App\Models\Product($this->container->get('PDO'));
        $latestProducts = $latestProduct->getLatestProducts();


        $sliderProduct = new \App\Models\Product($this->container->get('PDO'));
        $sliderProducts = $sliderProduct->getRecommendedProducts();



        $category = new \App\Models\Category($this->container->get('PDO'));
        $categories = $category->getCategoryList();

        return $this->view('index', compact('latestProducts', 'categories', 'sliderProducts'));

    }
}
