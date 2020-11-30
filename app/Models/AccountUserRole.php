<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function var_dump;

class AccountUserRole extends Model
{
    use HasFactory;

    public function role(){

        return $this->hasOne(AccountRole::class, 'id', 'account_role_id');
    }

    public function accountUser(){
        return $this->belongsTo(AccountUser::class);
    }
}

