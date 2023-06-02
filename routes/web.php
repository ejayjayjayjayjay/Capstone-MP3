<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderagentController;
use App\Http\Controllers\OrderCreateController;
use App\Http\Controllers\CustomeragentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Frontend pages

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Dashboard

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/index', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    // Agent Management Start
    Route::get('/admin/all-agent', [AdminController::class, 'AllAgent'])->name('admin.allagent');
    Route::get('/admin/add-agent-index', [AdminController::class, 'AddAgentIndex'])->name('admin.AddAgentIndex');
    Route::post('insert-agent', [AdminController::class, 'InsertAgent'])->name('admin.Insertagent');
    Route::get('/admin/edit-agent/{id}', [AdminController::class, 'EditAgent'])->name('admin.Editagent');
    Route::post('/update-agent/{id}', [AdminController::class, 'UpdateAgent'])->name('admin.Updateagent');
    Route::get('/admin/delete-agent/{id}', [AdminController::class, 'DeleteAgent'])->name('admin.Deleteagent');
    // Agent Management End

    // Chatify Route Start
    Route::get('/admin/chat-agent', [AdminController::class, 'ChatAgent'])->name('admin.Chatagent');
    Route::get('/agent/chat-agent', [AgentController::class, 'ChatAgent'])->name('agent.Chatagent');
    //Chatify Route End


    Route::resource('products', ProductController::class);
    Route::get('/products/delete-product/{id}', [ProductController::class, 'DeleteProduct'])->name('admin.Deleteproduct');
    Route::resource('customeragent', CustomeragentController::class);
    Route::get('/customeragent/delete-customer/{id}', [CustomeragentController::class, 'DeleteCustomer'])->name('admin.Deletecustomer');
    Route::resource('orders', OrderController::class);



});
//Agent Dashboard

    Route::middleware(['auth','role:agent'])->group(function(){
    Route::get('/agent/index', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
    Route::get('/agent/logout', [AgentController::class, 'AgentDestroy'])->name('agent.logout');
    Route::get('/agent/profile', [AgentController::class, 'AgentProfile'])->name('agent.profile');
    Route::post('/agent/profile/store', [AgentController::class, 'AgentProfileStore'])->name('agent.profile.store');
    Route::get('/agent/change/password', [AgentController::class, 'AgentChangePassword'])->name('agent.change.password');
    Route::post('/agent/update/password', [AgentController::class, 'AgentUpdatePassword'])->name('agent.update.password');

    Route::resource('orderagent', OrderagentController::class);
    Route::get('/orderagent/delete-order/{id}', [OrderagentController::class, 'DeleteOrder'])->name('admin.Deleteorder');
    Route::resource('customers', CustomerController::class);
    Route::get('/customers/delete-customer/{id}', [CustomerController::class, 'Deletecustomer'])->name('agent.Deletecustomer');


    Route::get('/orders/create', [OrderCreateController::class, 'create'])
        ->name('ordercreate.index');

    Route::post('/orders', [OrderCreateController::class, 'store'])
        ->name('ordercreate.store');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
Route::get('/agent/login', [AgentController::class, 'AgentLogin']);





