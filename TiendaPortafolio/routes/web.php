<?php
use App\Product;
use App\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    /* $categ =new Category();
    $categ->nombre='Hombres';
    $categ->slug='hombres';
    $categ->descripcion='Ropa para hombres';
    $categ->save(); 

    $categ2 =new Category();
    $categ2->nombre='Mujeres';
    $categ2->slug='mujeres';
    $categ2->descripcion='Ropa para mujeres';
    $categ2->save(); */

     /* $prod = new Product();
     $prod = Product::find(3)->category;
     return $prod; */
    
 /*   $prod->nombre='Producto 3';
    $prod->slug='Producto 3';
    $prod->category_id='2';
    $prod->descripcion_corta='Producto 3';
    $prod->especificaciones='Producto 3';
    $prod->datos_interes='Producto 3';
    $prod->estado='Nuevo';
    $prod->activo='Si';
    $prod->sliderprincipal='No';
    $prod->save();
    return $prod;  */
  /*   $categ =new Category();
    $categ = Category::find(1)->products;
    return $categ;

    return view('welcome'); */
    return view('tienda.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
