<?php



use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

//------------------------------------------------------------RUTAS--WEB----------------------------------------------------------------------------------------------

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('login_inicio', [AuthenticatedSessionController::class, 'index'])->name('login');
// Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('home/participants/', [HomeController::class, 'participants'])->name('home.participants');
Route::get('home/show_participant/{nit}', [HomeController::class, 'show_participant'])->name('home.show_participant');
Route::post('home/save_participant', [HomeController::class, 'save_participant'])->name('home.save_participant');
// Route::get('register_Inicio', [RegisteredUserController::class, 'index'])->name('register');
// Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
// Route::get('/verification', [RegisteredUserController::class, 'verification'])->name('verification');
// Route::post('verification_code', [RegisteredUserController::class, 'validation'])->name('verification.validate');
// Route::get('/recoverypassword', [RecoveryPasswordController::class, 'index'])->name('recoverypassword');
// Route::get('/delete/code/{correo}', [RegisteredUserController::class, 'delete_code'])->name('verification.delete_code');
// Route::get('/vista_validar', [RegisteredUserController::class, 'vista_validar'])->name('verification.vista_validar');


// Route::get('recoverpassword/delete/code/{correo}', [RecoveryPasswordController::class, 'delete_code'])->name('recoverpassword.delete_code');
// Route::get('recoverpassword/index', [RecoveryPasswordController::class, 'index'])->name('recoverpassword');
// Route::post('recoverpassword/validate', [RecoveryPasswordController::class, 'validation_email'])->name('recoverpassword.validation_email');
// Route::post('recoverpassword/validate/code', [RecoveryPasswordController::class, 'validation_code'])->name('recoverpassword.validation_code');
// Route::post('recoverpassword/change_password', [RecoveryPasswordController::class, 'change_password'])->name('recoverpassword.change_password');

// Route::get('/productcatalog', [ProductController::class, 'index'])->name('productcatalog');
// Route::get('/productprofile/{product}', [ProductController::class, 'show'])->name('productprofile');
// Route::post('productprofile/calificar', [ProductController::class, 'calificar'])->name('productprofile.calificar');

// Route::get('shoppingcart', [ShoppingCartController::class, 'index'])->name('shoppingcart');
// Route::get('shoppingcart/calcular', [ShoppingCartController::class, 'calcular'])->name('shoppingcart.calcular');
// Route::get('shoppingcart/delete/{id}', [ShoppingCartController::class, 'delete'])->name('shoppingcart.delete');
// Route::post('shoppingcart/editquantity', [ShoppingCartController::class, 'editquantity'])->name('shoppingcart.editquantity');
// Route::post('/shoppingcart/store', [ShoppingCartController::class, 'store'])->name('shoppingcart.store');
// Route::get('shoppingcart/comprar', [ShoppingCartController::class, 'comprar'])->name('shoppingcart.comprar');
