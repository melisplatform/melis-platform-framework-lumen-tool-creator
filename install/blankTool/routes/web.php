/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/melis/' . strtolower('[module_name]') . '/tool', function(){
    return "<div class='bg-white' style='padding-top:60px;''><h2 class='text-success text-center'>Lumen blank tool created !</h2></div>";
});




