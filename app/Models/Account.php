<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;

    const STATUS_INACTIVE = 0;

    const STATUS_BANNED = 2;

    /**
     * Returns the User model of the account creator
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    /**
     * Returns the Invites of the account
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invites(){

        return $this->hasMany(AccountUserInvite::class);

    }
}
