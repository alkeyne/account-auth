<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountUser extends Model
{
    const STATUS_ACTIVE = 1;

    const STATUS_INACTIVE = 0;

    /**
     * Returns the user model of the Account user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {

        return $this->belongsTo(User::class);
    }

    /**
     * Returns the account of the Account User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Account()
    {

        return $this->belongsTo(Account::class);
    }

    /**
     * Returns the roles of the user for the account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Roles()
    {

        return $this->hasMany(AccountUserRole::class);
    }
}
