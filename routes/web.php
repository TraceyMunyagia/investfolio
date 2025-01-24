<?php

use App\Livewire\AdminDashboard;
use App\Livewire\AdminLogin;
use App\Livewire\AdminRegister;
use App\Livewire\ApprovedRegister;
use App\Livewire\ApprovedLogin;
use App\Livewire\ContractAgreement;
use App\Livewire\Customers;
use App\Livewire\CreateCustomer;
use App\Livewire\DisplayAccount;
use App\Livewire\DisplayApproved;
use App\Livewire\DisplayUsers;
use App\Livewire\PendingApproval;
use App\Livewire\UserDashboard;
use App\Livewire\ViewCustomer;
use App\Livewire\EditCustomer;
use App\Livewire\Register;
use App\Livewire\Terms;
use App\Livewire\Login;
use App\Livewire\Waiting;
use App\Livewire\Payment;
use App\Models\Admin;
use App\Mail\Email;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mail', function () {
    return view('mail.welcome');
});





Route::middleware('auth')->group(function(){
Route::get('/customers/create', Createcustomer::class);
Route::get('/customers', Customers::class);
Route::get('/customers/{customer}', ViewCustomer::class);
Route::get('/customers/{customer}/edit', EditCustomer::class);
});

Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');
Route::get('/admin/register', AdminRegister::class);
Route::get('/admin/login', AdminLogin::class);
Route::get('/waiting', Waiting::class);
Route::get('/admin/dashboard', AdminDashboard::class);
Route::get('/display/user', DisplayUsers::class);
Route::get('/pending/approval', PendingApproval::class);
Route::get('/approved/register', ApprovedRegister::class);
Route::get('/approved/login', ApprovedLogin::class);
Route::get('/user/dashboard', UserDashboard::class);
Route::get('/display/users', DisplayUsers::class);
Route::get('/display/approved', DisplayApproved::class);
Route::get('/contract/agreement', ContractAgreement::class);
Route::get('/terms', Terms::class);
Route::get('/pay', Payment::class);
Route::get('/display/account', DisplayAccount::class);


