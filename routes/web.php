<?php

use App\Models\AccountUser;
use App\Models\AccountUserInvite;
use App\Models\AccountUserRole;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Account;

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
    return view('welcome');
});

Route::get('/test', function () {

    /* $accountUser = new AccountUser();
     $accountUser->account_id = 1;
     $accountUser->user_id = 1;
     $accountUser->status = AccountUser::STATUS_ACTIVE;
     $accountUser->save();*/

    /*    $accountUser = AccountUser::find(1);
        var_dump($accountUser->account->createdBy);*/

//
//    $user = User::find(1);
//    var_dump($user->accounts[0]->roles[0]->accountUser->account->createdBy);

      $accountUserInvite = AccountUserInvite::find(1);
      var_dump(optional($accountUserInvite->user)->toArray());

});
