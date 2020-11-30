<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountUserInvite extends Model
{
    use HasFactory;

    public function account(){

        return $this->hasOne(Account::class);

    }

    public function user(){
        return $this->hasOne(User::class);
    }




}
