<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function var_dump;

class AccountUserRole extends Model
{
    use HasFactory;

    /**
     * Returns the role model of this account user role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role(){

        return $this->hasOne(AccountRole::class, 'id', 'account_role_id');
    }

    /**
     * Returns the account user for this account user role
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accountUser(){
        return $this->belongsTo(AccountUser::class);
    }
}

