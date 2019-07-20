<?php
require '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../src/view');
$twig = new Twig_Environment($loader, array('cache'=> false, 'debug'=> true));
$twig->addExtension(new Twig_Extension_Debug);
//echo $twig->render('base.html.twig');

/*$products = array('product1'=>'banane', 'product2'=>'fraise', 'product3'=>'melon', 'product4'=>'avocat', 'product5'=>'tomates');
echo $twig->render('index.html.twig', array('products1' => 'banane'));
/*foreach ($products as $value) {
    echo $value . "<br>";

}*/

$template = $twig->loadTemplate('index.html.twig');
$products = array(
array('fruit_1'=>'banane', 
'fruit_2'=>'fraise', 
'fruit_3'=>'melon', 
'fruit_4'=>'avocat', 
'fruit_5'=>'tomates'));

echo $template->render(array('products'=> $products)); 
?>