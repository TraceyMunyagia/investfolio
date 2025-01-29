<?php

use App\Livewire\AdminDashboard;
use App\Livewire\ApprovedRegister;
use App\Livewire\ApprovedLogin;
use App\Livewire\ChangePin;
use App\Livewire\ContractAgreement;
use App\Livewire\Customers;
use App\Livewire\CreateCustomer;
use App\Livewire\DisplayDeposit;
use App\Livewire\DisplayInstallment;
use App\Livewire\InvestorDashboard;
use App\Livewire\MakeDeposit;
use App\Livewire\DisplayAccount;
use App\Livewire\DisplayApproved;
use App\Livewire\DisplayContract;
use App\Livewire\DisplayUsers;
use App\Livewire\MakeInstallment;
use App\Livewire\NewUser;
use App\Livewire\PendingApproval;
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
Route::get('/new/user', NewUser::class);
Route::get('/register', Register::class);
Route::get('/login', Login::class)->name('login');
Route::get('/waiting', Waiting::class);
Route::get('/admin/dashboard', AdminDashboard::class);
Route::get('/display/user', DisplayUsers::class);
Route::get('/pending/approval', PendingApproval::class);
Route::get('/approved/register', ApprovedRegister::class);
Route::get('/approved/login', ApprovedLogin::class);
Route::get('/display/users', DisplayUsers::class);
Route::get('/terms', Terms::class);
Route::get('/payment', Payment::class);
Route::get('/display/account', DisplayAccount::class);
Route::get('/change/pin', ChangePin::class);
Route::get('/deposit', MakeDeposit::class);
Route::get('/installment', MakeInstallment::class);
Route::get('/investor/dashboard', InvestorDashboard::class);
Route::get('/display/deposit', DisplayDeposit::class);
Route::get('/display/installment', DisplayInstallment::class);
Route::get('/contract', ContractAgreement::class);
Route::get('/display/contract', DisplayContract::class);


