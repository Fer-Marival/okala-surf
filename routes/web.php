<?php

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



// Route::get('/booking', function () {
//     return view('pages.booking');
// });
Route::get('/articles', 'PageController@index');

Route::post('/', 'PageController@store')->name('booking.send');

Route::get('/booking', 'BookController@booknow');
Route::post('mail', function (\Illuminate\Http\Request $request ,  \Illuminate\Mail\Mailer $mailer){
	$mailer->to('furibe@marivalaccess.com')
			->send(new \App\Mail\ContactMail($request));
	return redirect('/booking')->with('message', 'Gracias por contáctarnos, pronto recibirá respuesta.');
})-> name('enviaremail');

//Route::post('/booking', ['as'=>'booknow.store',
//'uses'=> 'BookController@booknowPost']);

Route::group(['middleware' => ['web']], function () {
 
    Route::get('/', function () {
    	return view('pages.home');
	});
 
    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);
 
});