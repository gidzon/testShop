<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* single.twig */
class __TwigTemplate_ff9154aeb2a2d75abf6d696e0fb8d2e6ab9b4024ea981b5d254136ee30721c02 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
<link href=\"../public/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src=\"../public/js/jquery-1.11.0.min.js\"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href=\"../public/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!--//theme-style-->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src=\"../public/js/simpleCart.min.js\"> </script>
<link href=\"../public/css/memenu.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<script type=\"text/javascript\" src=\"../public/js/memenu.js\"></script>
<script>\$(document).ready(function(){\$(\".memenu\").memenu();});</script>\t
<!--dropdown-->
<script src=\"../public/js/jquery.easydropdown.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t
\t    var menu_ul = \$('.menu_drop > li > ul'),
\t           menu_a  = \$('.menu_drop > li > a');
\t    
\t    menu_ul.hide();
\t
\t    menu_a.click(function(e) {
\t        e.preventDefault();
\t        if(!\$(this).hasClass('active')) {
\t            menu_a.removeClass('active');
\t            menu_ul.filter(':visible').slideUp('normal');
\t            \$(this).addClass('active').next().stop(true,true).slideDown('normal');
\t        } else {
\t            \$(this).removeClass('active');
\t            \$(this).next().stop(true,true).slideUp('normal');
\t        }
\t    });
\t
\t});
</script>\t\t
</head>
<body> 
\t<!--top-header-->
\t<div class=\"top-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"top-header-main\">
\t\t\t\t<div class=\"col-md-6 top-header-left\">
\t\t\t\t\t<div class=\"drop\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<select tabindex=\"4\" class=\"dropdown drop\">
\t\t\t\t\t\t\t\t<option value=\"\" class=\"label\">Dollar :</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Dollar</option>
\t\t\t\t\t\t\t\t<option value=\"2\">Euro</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t\t<select tabindex=\"4\" class=\"dropdown\">
\t\t\t\t\t\t\t\t<option value=\"\" class=\"label\">English :</option>
\t\t\t\t\t\t\t\t<option value=\"1\">English</option>
\t\t\t\t\t\t\t\t<option value=\"2\">French</option>
\t\t\t\t\t\t\t\t<option value=\"3\">German</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        // line 78
        if (($context["sum"] ?? null)) {
            // line 79
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sum"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["namber"]) {
                // line 80
                echo "\t\t\t\t<div class=\"col-md-6 top-header-left\">
\t\t\t\t\t<div class=\"cart box_1\">
\t\t\t\t\t\t<a href=\"checkout.html\">
\t\t\t\t\t\t\t<div class=\"total\">

\t\t\t\t\t\t\t\t<span class=\"simpleCart_total\"></span></div>
\t\t\t\t\t\t\t\t<img src=\"../public/images/cart-1.png\" alt=\"\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p><a href=\"javascript:;\" class=\"simpleCart_empty\">Empty Cart</a></p>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['namber'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t\t";
        }
        // line 94
        echo "
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--top-header-->
\t<!--start-logo-->
\t<div class=\"logo\">
\t\t<a href=\"index.html\"><h1>Luxury Watches</h1></a>
\t</div>
\t<!--start-logo-->
\t<!--bottom-header-->
\t<div class=\"header-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"col-md-9 header-left\">
\t\t\t\t<div class=\"top-nav\">
\t\t\t\t\t<ul class=\"memenu skyblue\"><li class=\"active\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"#\">Men</a>
\t\t\t\t\t\t\t<div class=\"mepanel\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Shop</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">New Arrivals</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Blazers</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Swem Wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Handbags</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">T-Shirts</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">My Shopping Bag</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Style Zone</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Brands</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Coats</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Trousers</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Popular Brands</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">499 Store</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fastrack</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Casio</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fossil</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Maxima</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Timex</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">TomTom</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Titan</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"#\">Women</a>
\t\t\t\t\t\t\t<div class=\"mepanel\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Shop</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">New Arrivals</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Blazers</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Swem Wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Handbags</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">T-Shirts</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">My Shopping Bag</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Style Zone</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Brands</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Coats</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Trousers</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Popular Brands</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">499 Store</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fastrack</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Casio</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fossil</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Maxima</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Timex</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">TomTom</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Titan</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"#\">Kids</a>
\t\t\t\t\t\t\t<div class=\"mepanel\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Shop</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">New Arrivals</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Blazers</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Swem Wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Handbags</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">T-Shirts</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">My Shopping Bag</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Style Zone</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Brands</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Coats</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Trousers</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Popular Brands</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">499 Store</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fastrack</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Casio</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fossil</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Maxima</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Timex</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">TomTom</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Titan</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"typo.html\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 header-right\"> 
\t\t\t\t<div class=\"search-bar\">
\t\t\t\t\t<input type=\"text\" value=\"Search\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search';}\">
\t\t\t\t\t<input type=\"submit\" value=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--bottom-header-->
\t<!--start-breadcrumbs-->
\t<div class=\"breadcrumbs\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs-main\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Single</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--end-breadcrumbs-->
\t<!--start-single-->
\t<div class=\"single contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"single-main\">
\t\t\t\t<div class=\"col-md-9 single-main-left\">
                    ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 278
            echo "\t\t\t\t<div class=\"sngl-top\">
\t\t\t\t\t<div class=\"col-md-5 single-top-left\">\t
\t\t\t\t\t\t<div class=\"flexslider\">
\t\t\t\t\t\t\t  <ul class=\"slides\">
\t\t\t\t\t\t\t\t<li data-thumb=\"images/s-1.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb-image\"> <img src=\"";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 283), "html", null, true);
            echo "\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"/> </div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-thumb=\"images/s-2.jpg\">
\t\t\t\t\t\t\t\t\t <div class=\"thumb-image\"> <img src=\"../public/images/s-2.jpg\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"/> </div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-thumb=\"images/s-3.jpg\">
\t\t\t\t\t\t\t\t   <div class=\"thumb-image\"> <img src=\"../public/images/s-3.jpg\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"/> </div>
\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- FlexSlider -->
\t\t\t\t\t\t<script src=\"../public/js/imagezoom.js\"></script>
\t\t\t\t\t\t<script defer src=\"../public/js/jquery.flexslider.js\"></script>
\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"../public/css/flexslider.css\" type=\"text/css\" media=\"screen\" />

\t\t\t\t\t\t<script>
\t\t\t\t\t\t// Can also be used with \$(document).ready()
\t\t\t\t\t\t\$(window).load(function() {
\t\t\t\t\t\t  \$('.flexslider').flexslider({
\t\t\t\t\t\t\tanimation: \"slide\",
\t\t\t\t\t\t\tcontrolNav: \"thumbnails\"
\t\t\t\t\t\t  });
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-md-7 single-top-right\">
\t\t\t\t\t\t<div class=\"single-para simpleCart_shelfItem\">
\t\t\t\t\t\t<h2>";
            // line 310
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 310), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<div class=\"star-on\">
\t\t\t\t\t\t\t\t<ul class=\"star-footer\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"> 1 customer review </a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h5 class=\"item_price\">";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 326), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t<p>";
            // line 327
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 327), "html", null, true);
            echo "</p>

\t\t\t\t\t\t\t<div class=\"available\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Color
\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t<option>Silver</option>
\t\t\t\t\t\t\t\t\t\t<option>Black</option>
\t\t\t\t\t\t\t\t\t\t<option>Dark Black</option>
\t\t\t\t\t\t\t\t\t\t<option>Red</option>
\t\t\t\t\t\t\t\t\t</select></li>
\t\t\t\t\t\t\t\t<li class=\"size-in\">Size<select>
\t\t\t\t\t\t\t\t\t<option>Large</option>
\t\t\t\t\t\t\t\t\t<option>Medium</option>
\t\t\t\t\t\t\t\t\t<option>small</option>
\t\t\t\t\t\t\t\t\t<option>Large</option>
\t\t\t\t\t\t\t\t\t<option>small</option>
\t\t\t\t\t\t\t\t</select></li>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"tag-men\">
\t\t\t\t\t\t\t\t<li><span>TAG</span>
\t\t\t\t\t\t\t\t<span class=\"women1\">: Women,</span></li>
\t\t\t\t\t\t\t\t<li><span>SKU</span>
\t\t\t\t\t\t\t\t<span class=\"women1\">: CK09</span></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"add-cart item_add\" data-id=\"";
            // line 355
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 355), "html", null, true);
            echo "\">ADD TO CART</a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<ul class=\"menu_drop\">
\t\t\t\t<li class=\"item1\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Description</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
\t\t\t\t\t\t<li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"item2\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Additional information</a>
\t\t\t\t\t<ul>
\t\t\t\t\t    <li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"item3\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Reviews (10)</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
\t\t\t\t\t\t<li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"item4\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Helpful Links</a>
\t\t\t\t\t<ul>
\t\t\t\t\t    <li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"item5\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Make A Gift</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
\t\t\t\t\t\t<li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t \t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"latestproducts\">
\t\t\t\t\t<div class=\"product-one\">
\t\t\t\t\t\t<div class=\"col-md-4 product-left p-left\">
                            ";
        // line 403
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productsSguidance"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["guidance"]) {
            // line 404
            echo "\t\t\t\t\t\t\t<div class=\"product-main simpleCart_shelfItem\">
\t\t\t\t\t\t\t\t<a href=\"single/";
            // line 405
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ...[0 => $context["guidance"]]), "html", null, true);
            echo "\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"../public/images/p-1.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t<div class=\"product-bottom\">
\t\t\t\t\t\t\t\t\t<h3>";
            // line 407
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["guidance"], "name", [], "any", false, false, false, 407), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t\t\t\t<p>Explore Now</p>
\t\t\t\t\t\t\t\t\t<h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">";
            // line 409
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 409), "html", null, true);
            echo "</span></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"srch\">
\t\t\t\t\t\t\t\t\t<span>-50%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guidance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 417
        echo "
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 single-right\">
\t\t\t\t\t<div class=\"w_sidebar\">
\t\t\t\t\t\t<section  class=\"sky-form\">
\t\t\t\t\t\t\t<h4>Catogories</h4>
\t\t\t\t\t\t\t<div class=\"row1 scroll-pane\">
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\"><i></i>All Accessories</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col col-4\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Women Watches</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Kids Watches</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Men Watches</label>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section  class=\"sky-form\">
\t\t\t\t\t\t\t<h4>Brand</h4>
\t\t\t\t\t\t\t<div class=\"row1 row2 scroll-pane\">
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\"><i></i>kurtas</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Sonata</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Titan</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Casio</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Omax</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" ><i></i>shree</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Fastrack</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Sports</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Fossil</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Maxima</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Yepme</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Citizen</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Diesel</label>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"sky-form\">
\t\t\t\t\t\t\t<h4>Colour</h4>
\t\t\t\t\t\t\t\t<ul class=\"w_nav2\">
\t\t\t\t\t\t\t\t\t<li><a class=\"color1\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color2\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color3\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color4\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color5\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color6\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color7\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color8\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color9\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color10\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color12\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color13\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color14\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color15\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color5\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color6\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color7\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color8\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color9\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color10\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"sky-form\">
\t\t\t\t\t\t\t<h4>discount</h4>
\t\t\t\t\t\t\t<div class=\"row1 row2 scroll-pane\">
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\" checked=\"\"><i></i>60 % and above</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>50 % and above</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>40 % and above</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>30 % and above</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>20 % and above</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>10 % and above</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--end-single-->
\t<!--information-starts-->
\t<div class=\"information\">
\t\t<div class=\"container\">
\t\t\t<div class=\"infor-top\">
\t\t\t\t<div class=\"col-md-3 infor-left\">
\t\t\t\t\t<h3>Follow Us</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"fb\"></span><h6>Facebook</h6></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"twit\"></span><h6>Twitter</h6></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"google\"></span><h6>Google+</h6></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 infor-left\">
\t\t\t\t\t<h3>Information</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\"><p>Specials</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>New Products</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>Our Stores</p></a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\"><p>Contact Us</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>Top Sellers</p></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 infor-left\">
\t\t\t\t\t<h3>My Account</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"account.html\"><p>My Account</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>My Credit slips</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>My Merchandise returns</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>My Personal info</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>My Addresses</p></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 infor-left\">
\t\t\t\t\t<h3>Store Information</h3>
\t\t\t\t\t<h4>The company name,
\t\t\t\t\t\t<span>Lorem ipsum dolor,</span>
\t\t\t\t\t\tGlasglow Dr 40 Fe 72.</h4>
\t\t\t\t\t<h5>+955 123 4567</h5>\t
\t\t\t\t\t<p><a href=\"mailto:example@email.com\">contact@example.com</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--information-end-->
\t<!--footer-starts-->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"col-md-6 footer-left\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" value=\"Enter Your Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter Your Email';}\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Subscribe\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 footer-right\">\t\t\t\t\t
\t\t\t\t\t<p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--footer-end-->
\t<script>
\t\t\$(document).ready(function(){
\t\t\t\$(\".add-cart\").click(function () {
\t\t\t\tvar id = \$(this).attr(\"data-id\");
\t\t\t\t\$.get(\"/cart/add/\"+id, {}, function (data) {
\t\t\t\t\t\$(\".simpleCart_total\").html(data);
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t});
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "single.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 417,  497 => 409,  492 => 407,  487 => 405,  484 => 404,  480 => 403,  432 => 357,  424 => 355,  393 => 327,  389 => 326,  370 => 310,  340 => 283,  333 => 278,  329 => 277,  144 => 94,  141 => 93,  123 => 80,  118 => 79,  116 => 78,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Luxury Watches A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
<link href=\"../public/css/bootstrap.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
<script src=\"../public/js/jquery-1.11.0.min.js\"></script>
<!--Custom-Theme-files-->
<!--theme-style-->
<link href=\"../public/css/style.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!--//theme-style-->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<meta name=\"keywords\" content=\"Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design\" />
<script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--start-menu-->
<script src=\"../public/js/simpleCart.min.js\"> </script>
<link href=\"../public/css/memenu.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<script type=\"text/javascript\" src=\"../public/js/memenu.js\"></script>
<script>\$(document).ready(function(){\$(\".memenu\").memenu();});</script>\t
<!--dropdown-->
<script src=\"../public/js/jquery.easydropdown.js\"></script>
<script type=\"text/javascript\">
\t\$(function() {
\t
\t    var menu_ul = \$('.menu_drop > li > ul'),
\t           menu_a  = \$('.menu_drop > li > a');
\t    
\t    menu_ul.hide();
\t
\t    menu_a.click(function(e) {
\t        e.preventDefault();
\t        if(!\$(this).hasClass('active')) {
\t            menu_a.removeClass('active');
\t            menu_ul.filter(':visible').slideUp('normal');
\t            \$(this).addClass('active').next().stop(true,true).slideDown('normal');
\t        } else {
\t            \$(this).removeClass('active');
\t            \$(this).next().stop(true,true).slideUp('normal');
\t        }
\t    });
\t
\t});
</script>\t\t
</head>
<body> 
\t<!--top-header-->
\t<div class=\"top-header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"top-header-main\">
\t\t\t\t<div class=\"col-md-6 top-header-left\">
\t\t\t\t\t<div class=\"drop\">
\t\t\t\t\t\t<div class=\"box\">
\t\t\t\t\t\t\t<select tabindex=\"4\" class=\"dropdown drop\">
\t\t\t\t\t\t\t\t<option value=\"\" class=\"label\">Dollar :</option>
\t\t\t\t\t\t\t\t<option value=\"1\">Dollar</option>
\t\t\t\t\t\t\t\t<option value=\"2\">Euro</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"box1\">
\t\t\t\t\t\t\t<select tabindex=\"4\" class=\"dropdown\">
\t\t\t\t\t\t\t\t<option value=\"\" class=\"label\">English :</option>
\t\t\t\t\t\t\t\t<option value=\"1\">English</option>
\t\t\t\t\t\t\t\t<option value=\"2\">French</option>
\t\t\t\t\t\t\t\t<option value=\"3\">German</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% if sum %}
\t\t\t\t\t{% for namber in sum %}
\t\t\t\t<div class=\"col-md-6 top-header-left\">
\t\t\t\t\t<div class=\"cart box_1\">
\t\t\t\t\t\t<a href=\"checkout.html\">
\t\t\t\t\t\t\t<div class=\"total\">

\t\t\t\t\t\t\t\t<span class=\"simpleCart_total\"></span></div>
\t\t\t\t\t\t\t\t<img src=\"../public/images/cart-1.png\" alt=\"\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p><a href=\"javascript:;\" class=\"simpleCart_empty\">Empty Cart</a></p>
\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}

\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--top-header-->
\t<!--start-logo-->
\t<div class=\"logo\">
\t\t<a href=\"index.html\"><h1>Luxury Watches</h1></a>
\t</div>
\t<!--start-logo-->
\t<!--bottom-header-->
\t<div class=\"header-bottom\">
\t\t<div class=\"container\">
\t\t\t<div class=\"header\">
\t\t\t\t<div class=\"col-md-9 header-left\">
\t\t\t\t<div class=\"top-nav\">
\t\t\t\t\t<ul class=\"memenu skyblue\"><li class=\"active\"><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"#\">Men</a>
\t\t\t\t\t\t\t<div class=\"mepanel\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Shop</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">New Arrivals</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Blazers</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Swem Wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Handbags</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">T-Shirts</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">My Shopping Bag</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Style Zone</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Brands</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Coats</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Trousers</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Popular Brands</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">499 Store</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fastrack</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Casio</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fossil</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Maxima</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Timex</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">TomTom</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Titan</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"#\">Women</a>
\t\t\t\t\t\t\t<div class=\"mepanel\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Shop</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">New Arrivals</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Blazers</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Swem Wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Handbags</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">T-Shirts</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">My Shopping Bag</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Style Zone</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Brands</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Coats</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Trousers</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Popular Brands</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">499 Store</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fastrack</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Casio</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fossil</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Maxima</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Timex</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">TomTom</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Titan</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"#\">Kids</a>
\t\t\t\t\t\t\t<div class=\"mepanel\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Shop</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">New Arrivals</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Blazers</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Swem Wear</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Handbags</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">T-Shirts</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">My Shopping Bag</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Style Zone</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Shoes</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Watches</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Brands</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Coats</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Accessories</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Trousers</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col1 me-one\">
\t\t\t\t\t\t\t\t\t\t<h4>Popular Brands</h4>
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">499 Store</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fastrack</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Casio</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Fossil</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Maxima</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Timex</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">TomTom</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"products.html\">Titan</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"typo.html\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"grid\"><a href=\"contact.html\">Contact</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t\t<div class=\"col-md-3 header-right\"> 
\t\t\t\t<div class=\"search-bar\">
\t\t\t\t\t<input type=\"text\" value=\"Search\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search';}\">
\t\t\t\t\t<input type=\"submit\" value=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--bottom-header-->
\t<!--start-breadcrumbs-->
\t<div class=\"breadcrumbs\">
\t\t<div class=\"container\">
\t\t\t<div class=\"breadcrumbs-main\">
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"/\">Home</a></li>
\t\t\t\t\t<li class=\"active\">Single</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--end-breadcrumbs-->
\t<!--start-single-->
\t<div class=\"single contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"single-main\">
\t\t\t\t<div class=\"col-md-9 single-main-left\">
                    {% for product in products %}
\t\t\t\t<div class=\"sngl-top\">
\t\t\t\t\t<div class=\"col-md-5 single-top-left\">\t
\t\t\t\t\t\t<div class=\"flexslider\">
\t\t\t\t\t\t\t  <ul class=\"slides\">
\t\t\t\t\t\t\t\t<li data-thumb=\"images/s-1.jpg\">
\t\t\t\t\t\t\t\t\t<div class=\"thumb-image\"> <img src=\"{{product.image }}\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"/> </div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-thumb=\"images/s-2.jpg\">
\t\t\t\t\t\t\t\t\t <div class=\"thumb-image\"> <img src=\"../public/images/s-2.jpg\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"/> </div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li data-thumb=\"images/s-3.jpg\">
\t\t\t\t\t\t\t\t   <div class=\"thumb-image\"> <img src=\"../public/images/s-3.jpg\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"/> </div>
\t\t\t\t\t\t\t\t</li> 
\t\t\t\t\t\t\t  </ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- FlexSlider -->
\t\t\t\t\t\t<script src=\"../public/js/imagezoom.js\"></script>
\t\t\t\t\t\t<script defer src=\"../public/js/jquery.flexslider.js\"></script>
\t\t\t\t\t\t<link rel=\"stylesheet\" href=\"../public/css/flexslider.css\" type=\"text/css\" media=\"screen\" />

\t\t\t\t\t\t<script>
\t\t\t\t\t\t// Can also be used with \$(document).ready()
\t\t\t\t\t\t\$(window).load(function() {
\t\t\t\t\t\t  \$('.flexslider').flexslider({
\t\t\t\t\t\t\tanimation: \"slide\",
\t\t\t\t\t\t\tcontrolNav: \"thumbnails\"
\t\t\t\t\t\t  });
\t\t\t\t\t\t});
\t\t\t\t\t\t</script>
\t\t\t\t\t</div>\t
\t\t\t\t\t<div class=\"col-md-7 single-top-right\">
\t\t\t\t\t\t<div class=\"single-para simpleCart_shelfItem\">
\t\t\t\t\t\t<h2>{{ product.name }}</h2>
\t\t\t\t\t\t\t<div class=\"star-on\">
\t\t\t\t\t\t\t\t<ul class=\"star-footer\">
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\"><i> </i></a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"review\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"> 1 customer review </a>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h5 class=\"item_price\">{{ product.price }}</h5>
\t\t\t\t\t\t\t<p>{{ product.description }}</p>

\t\t\t\t\t\t\t<div class=\"available\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Color
\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t<option>Silver</option>
\t\t\t\t\t\t\t\t\t\t<option>Black</option>
\t\t\t\t\t\t\t\t\t\t<option>Dark Black</option>
\t\t\t\t\t\t\t\t\t\t<option>Red</option>
\t\t\t\t\t\t\t\t\t</select></li>
\t\t\t\t\t\t\t\t<li class=\"size-in\">Size<select>
\t\t\t\t\t\t\t\t\t<option>Large</option>
\t\t\t\t\t\t\t\t\t<option>Medium</option>
\t\t\t\t\t\t\t\t\t<option>small</option>
\t\t\t\t\t\t\t\t\t<option>Large</option>
\t\t\t\t\t\t\t\t\t<option>small</option>
\t\t\t\t\t\t\t\t</select></li>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"tag-men\">
\t\t\t\t\t\t\t\t<li><span>TAG</span>
\t\t\t\t\t\t\t\t<span class=\"women1\">: Women,</span></li>
\t\t\t\t\t\t\t\t<li><span>SKU</span>
\t\t\t\t\t\t\t\t<span class=\"women1\">: CK09</span></li>
\t\t\t\t\t\t\t</ul>

\t\t\t\t\t\t\t\t<a href=\"#\" class=\"add-cart item_add\" data-id=\"{{ product.id }}\">ADD TO CART</a>
                            {% endfor %}
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t\t</div>
\t\t\t\t<div class=\"tabs\">
\t\t\t\t\t<ul class=\"menu_drop\">
\t\t\t\t<li class=\"item1\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Description</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
\t\t\t\t\t\t<li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"item2\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Additional information</a>
\t\t\t\t\t<ul>
\t\t\t\t\t    <li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"item3\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Reviews (10)</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
\t\t\t\t\t\t<li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"item4\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Helpful Links</a>
\t\t\t\t\t<ul>
\t\t\t\t\t    <li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"item5\"><a href=\"#\"><img src=\"../public/images/arrow.png\" alt=\"\">Make A Gift</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li class=\"subitem1\"><a href=\"#\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</a></li>
\t\t\t\t\t\t<li class=\"subitem2\"><a href=\"#\"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
\t\t\t\t\t\t<li class=\"subitem3\"><a href=\"#\">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
\t\t\t\t\t</ul>
\t\t\t\t</li>
\t \t\t</ul>
\t\t\t\t</div>

\t\t\t\t<div class=\"latestproducts\">
\t\t\t\t\t<div class=\"product-one\">
\t\t\t\t\t\t<div class=\"col-md-4 product-left p-left\">
                            {% for guidance in productsSguidance %}
\t\t\t\t\t\t\t<div class=\"product-main simpleCart_shelfItem\">
\t\t\t\t\t\t\t\t<a href=\"single/{{dump(guidance)  }}\" class=\"mask\"><img class=\"img-responsive zoom-img\" src=\"../public/images/p-1.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t<div class=\"product-bottom\">
\t\t\t\t\t\t\t\t\t<h3>{{ guidance.name }}</h3>
\t\t\t\t\t\t\t\t\t<p>Explore Now</p>
\t\t\t\t\t\t\t\t\t<h4><a class=\"item_add\" href=\"#\"><i></i></a> <span class=\" item_price\">{{ product.price }}</span></h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"srch\">
\t\t\t\t\t\t\t\t\t<span>-50%</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                        {% endfor %}

\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t\t<div class=\"col-md-3 single-right\">
\t\t\t\t\t<div class=\"w_sidebar\">
\t\t\t\t\t\t<section  class=\"sky-form\">
\t\t\t\t\t\t\t<h4>Catogories</h4>
\t\t\t\t\t\t\t<div class=\"row1 scroll-pane\">
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\"><i></i>All Accessories</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col col-4\">\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Women Watches</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Kids Watches</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Men Watches</label>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section  class=\"sky-form\">
\t\t\t\t\t\t\t<h4>Brand</h4>
\t\t\t\t\t\t\t<div class=\"row1 row2 scroll-pane\">
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" checked=\"\"><i></i>kurtas</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Sonata</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Titan</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Casio</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Omax</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\" ><i></i>shree</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Fastrack</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Sports</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Fossil</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Maxima</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Yepme</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Citizen</label>
\t\t\t\t\t\t\t\t\t<label class=\"checkbox\"><input type=\"checkbox\" name=\"checkbox\"><i></i>Diesel</label>\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"sky-form\">
\t\t\t\t\t\t\t<h4>Colour</h4>
\t\t\t\t\t\t\t\t<ul class=\"w_nav2\">
\t\t\t\t\t\t\t\t\t<li><a class=\"color1\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color2\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color3\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color4\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color5\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color6\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color7\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color8\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color9\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color10\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color12\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color13\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color14\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color15\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color5\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color6\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color7\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color8\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color9\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"color10\" href=\"#\"></a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</section>
\t\t\t\t\t\t<section class=\"sky-form\">
\t\t\t\t\t\t\t<h4>discount</h4>
\t\t\t\t\t\t\t<div class=\"row1 row2 scroll-pane\">
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\" checked=\"\"><i></i>60 % and above</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>50 % and above</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>40 % and above</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col col-4\">
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>30 % and above</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>20 % and above</label>
\t\t\t\t\t\t\t\t\t<label class=\"radio\"><input type=\"radio\" name=\"radio\"><i></i>10 % and above</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t</section>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"> </div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--end-single-->
\t<!--information-starts-->
\t<div class=\"information\">
\t\t<div class=\"container\">
\t\t\t<div class=\"infor-top\">
\t\t\t\t<div class=\"col-md-3 infor-left\">
\t\t\t\t\t<h3>Follow Us</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"fb\"></span><h6>Facebook</h6></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"twit\"></span><h6>Twitter</h6></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><span class=\"google\"></span><h6>Google+</h6></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 infor-left\">
\t\t\t\t\t<h3>Information</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\"><p>Specials</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>New Products</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>Our Stores</p></a></li>
\t\t\t\t\t\t<li><a href=\"contact.html\"><p>Contact Us</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>Top Sellers</p></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 infor-left\">
\t\t\t\t\t<h3>My Account</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"account.html\"><p>My Account</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>My Credit slips</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>My Merchandise returns</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>My Personal info</p></a></li>
\t\t\t\t\t\t<li><a href=\"#\"><p>My Addresses</p></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 infor-left\">
\t\t\t\t\t<h3>Store Information</h3>
\t\t\t\t\t<h4>The company name,
\t\t\t\t\t\t<span>Lorem ipsum dolor,</span>
\t\t\t\t\t\tGlasglow Dr 40 Fe 72.</h4>
\t\t\t\t\t<h5>+955 123 4567</h5>\t
\t\t\t\t\t<p><a href=\"mailto:example@email.com\">contact@example.com</a></p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--information-end-->
\t<!--footer-starts-->
\t<div class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"col-md-6 footer-left\">
\t\t\t\t\t<form>
\t\t\t\t\t\t<input type=\"text\" value=\"Enter Your Email\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Enter Your Email';}\">
\t\t\t\t\t\t<input type=\"submit\" value=\"Subscribe\">
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 footer-right\">\t\t\t\t\t
\t\t\t\t\t<p>© 2015 Luxury Watches. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
\t\t\t\t</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!--footer-end-->
\t<script>
\t\t\$(document).ready(function(){
\t\t\t\$(\".add-cart\").click(function () {
\t\t\t\tvar id = \$(this).attr(\"data-id\");
\t\t\t\t\$.get(\"/cart/add/\"+id, {}, function (data) {
\t\t\t\t\t\$(\".simpleCart_total\").html(data);
\t\t\t\t});
\t\t\t\treturn false;
\t\t\t});
\t\t});
\t</script>
</body>
</html>", "single.twig", "W:\\domains\\testSite\\view\\single.twig");
    }
}
