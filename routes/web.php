

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return redirect(app()->getLocale());
 });

URL::defaults([
    'locale' => app()->getLocale()
]); 

Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale'
    ], function() {

    Route::get('/', function () {
        return view('inicio');
    })->name('inicio');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/despensas', function () {
        return view('despensas');
    })->middleware(['auth', 'verified'])->name('despensas');

    Route::get('/productos', function () {
        return view('productos');
    })->middleware(['auth', 'verified'])->name('productos');

    Route::get('/notas', function () {
        return view('notas');
    })->middleware(['auth', 'verified'])->name('notas');

    Route::get('/alertas', function () {
        return view('alertas');
    })->middleware(['auth', 'verified'])->name('alertas');

    Route::get('/planes', function () {
        return view('planes');
    })->name('planes');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    

    require __DIR__.'/auth.php';
});