<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Monitor;
use App\Models\Brand;
use App\Models\Akses;
use App\Models\Bran;
use App\Models\Order;

use App\Http\Controllers\SotrController;
use App\Http\Controllers\PartController;
use App\Http\Controllers\KatController;
use App\Http\Controllers\TovController;
use App\Http\Controllers\Auth\RegisteredUserController;

//получает содержимое корзмны
function getCart(Request $request) {
    return $request->session()->get('cart', []);
}
//задает содеримое
function setCart(Request $request, $arr) {
    return $request->session()->put('cart', $arr);
}
//контроллер для таблицы 
Route::get('/', function (Request $request) {
    $cart = getCart($request);
    $monitors = Monitor::where('model', 'like', '%'.$request->query('q').'%');

    if ($b = $request->query('b'))
        $pmonitors = $monitors->whereIn('brand_id', $b);

    if ($t = $request->query('t'))
        $monitors= $monitors->whereIn('tip', $t);

    $monitorsInCart = [];
    foreach ($monitors->lazy() as $monitor) {
        $monitorsInCart[] = [
            'monitor' => $monitor,
            'inCart' => isset($cart[$monitor->id])
        ];
    }

    return view('home', [
        'monitors' => $monitorsInCart,
        'brands' => Brand::all()
    ]);
});

/*
Route::post('/order', function (Request $request) {
    $o = new Order;
    $o->name = $request->input('name');
    $o->email = $request->input('email');
    $o->phone = $request->input('phone');
    $o->address = $request->input('address');
    $o->etc = $request->input('etc');
    $o->order_ids = join(',', getCart($request));
    $o->save();
    setCart($request, []);

    return view('info', [
        'title' => 'Заказ выполнен',
        'info' => 'Ожидайте звонка'
    ]);
});
*/
Route::get('/cart', function (Request $request) {
    $cart = getCart($request);
    $monitors = Monitor::whereIn('id', array_keys($cart))->get();
    $price = 0;
    
    foreach ($monitors as $p)
    
        $price += $p->price;

    if ($price === 0)
        return view('info', [
            'title' => 'В корзине нет продуктов',
            'info' => 'Добавьте продукты в корзину'
        ]);
    else
        return view('cart', [
            'monitors' => $monitors,
            'price' => $price,
            'cart' => $cart
        ]);
});




Route::get('/cart/plus/{id}', function (Request $request, $id) {
    $cart = getCart($request);
    $cart[$id] += 1;
    setCart($request, $cart);

    return back();
});

Route::get('/cart/minus/{id}', function (Request $request, $id) {
    $cart = getCart($request);
    if ($cart[$id] === 1)
        unset($cart[$id]);
    else
        $cart[$id] -= 1;
    setCart($request, $cart);

    return back();
});

Route::get('/cart/add/{id}', function (Request $request, $id) {
    $cart = getCart($request);
    $cart[$id] = 1;
    setCart($request, $cart);

    return back();
});

Route::get('/cart/remove/{id}', function (Request $request, $id) {
    $cart = getCart($request);
    unset($cart[$id]);
    setCart($request, $cart);
    
    return back();
});




Route::get('/part-update', function () {
    return view('part-update');
});
Route::get('/tov-update', function () {
    return view('tov-update');
});
Route::get('/kat-update', function () {
    return view('kat-update');
});
Route::get('part',function() {
    return redirect()->route('part');
    });

Route::get('tov',function() {
    return redirect()->route('tov');
    });
    Route::get('kat',function() {
    return redirect()->route('kat');
    });


    
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/podr', function () {
    return view('podr');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/form1', function () {
    return view('form1');
});
Route::get('/sotr', function () {
    return view('sotr');
});
Route::get('sotr',function() {
        return redirect()->route('sotr');
        });

    
        
        //для таблиц 


        //отображение таблицы,формы и запись 
Route::get('form1', 'App\Http\Controllers\SotrController@create' );
Route::post('form1', 'App\Http\Controllers\SotrController@store' );
Route::get('sotr', 'App\Http\Controllers\SotrController@table1');

Route::get('form', 'App\Http\Controllers\PartController@create' );
Route::post('form', 'App\Http\Controllers\PartController@store' );
Route::get('part', 'App\Http\Controllers\PartController@table');

Route::get('form2', 'App\Http\Controllers\KatController@create' );
Route::post('form2', 'App\Http\Controllers\KatController@store' );
Route::get('kat', 'App\Http\Controllers\KatController@table2');

Route::get('form3', 'App\Http\Controllers\TovController@create' );
Route::post('form3', 'App\Http\Controllers\TovController@store' );
Route::get('tov', 'App\Http\Controllers\TovController@table3');

//для кнопки детали 
Route::get('/sotr/{id}', 'App\Http\Controllers\SotrController@showOneMessage')->name('one-sotr');

Route::get('/part/{id}', 'App\Http\Controllers\PartController@showOneMessage')->name('one-part');

Route::get('/kat{id}', 'App\Http\Controllers\KatController@showOneMessage')->name('one-kat');

Route::get('/tov{id}', 'App\Http\Controllers\TovController@showOneMessage')->name('one-tov');

//для кнопки изменить 
Route::get('/sotr/{id}/update', 'App\Http\Controllers\SotrController@updateMessage')->name('sotr-update');
Route::post('/sotr/{id}/update', 'App\Http\Controllers\SotrController@updateMessageSubmit')->name('sotr-update-1');

Route::get('/part/{id}/update', 'App\Http\Controllers\PartController@updateMessage')->name('part-update');
Route::post('/part/{id}/update', 'App\Http\Controllers\PartController@updateMessageSubmit')->name('part-update-1');

Route::get('/kat/{id}/update', 'App\Http\Controllers\KatController@updateMessage')->name('kat-update');
Route::post('/kat/{id}/update', 'App\Http\Controllers\KatController@updateMessageSubmit')->name('kat-update-1');

Route::get('/tov/{id}/update', 'App\Http\Controllers\TovController@updateMessage')->name('tov-update');
Route::post('/tov/{id}/update', 'App\Http\Controllers\TovController@updateMessageSubmit')->name('tov-update-1');

//для кнопки удалить
Route::get('/sotr/{id}/delete', 'App\Http\Controllers\SotrController@deleteMessage')->name('sotr-delete');
Route::get('/part/{id}/delete', 'App\Http\Controllers\PartController@deleteMessage')->name('part-delete');
Route::get('/kat/{id}/delete', 'App\Http\Controllers\KatController@deleteMessage')->name('kat-delete');
Route::get('/tov/{id}/delete', 'App\Http\Controllers\TovController@deleteMessage')->name('tov-delete');

/*Route::group(['middleware' => ['auth', 'isadmin'], 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
});
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','isadmin'])->name('dashboard');


require __DIR__.'/auth.php';

 
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])
                ->name('register');
});
