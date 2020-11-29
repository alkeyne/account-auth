<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateAccountRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_roles', function (Blueprint $table) {
            $table->mediumInteger('id');
            $table->string('name', 60);
            $table->string('stub')->index();
        });

        DB::table('account_roles')->insert([
            [
                'id' => 1,
                'name' => 'Owner Primary',
                'stub' => 'owner_primary',
            ],
            [
                'id' => 2,
                'name' => 'Owner',
                'stub' => 'owner',
            ],
            [
                'id' => 3,
                'name' => 'Manager',
                'stub' => 'manager',
            ],
            [
                'id' => 4,
                'name' => 'User',
                'stub' => 'user',
            ]
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_roles');
    }
}
