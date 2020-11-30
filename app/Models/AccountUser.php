<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountUser extends Model
{
    const STATUS_ACTIVE = 1;

    const STATUS_INACTIVE = 0;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {

        return $this->belongsTo(User::class);
    }

    public function Account()
    {

        return $this->belongsTo(Account::class);
    }

    public function Roles()
    {

        return $this->hasMany(AccountUserRole::class);
    }
}
