<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountUserInvite extends Model
{

    const STATUS_ACCOUNT_USER_ADDED = 1;
    const STATUS_ACCOUNT_USER_DECLINED = 2;

    /**
     * Returns the account the invite is sent out for
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function account()
    {

        return $this->belongsTo(Account::class);
    }

    /**
     * Returns the user linked with the account invite if the user is registered else null
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo | null
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
