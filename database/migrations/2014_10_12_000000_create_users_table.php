<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Hash;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('role');
            $table->string('photo');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

          // Insert some stuff
    DB::table('users')->insert(
        array(
            'name' =>'Tatenda Marvelous',
            'email' => 'marveloustchimusoro@gmail.com',
            'password' => Hash::make('password'),
            'role'=>'SuperAdmin',
            'photo'=>'nomedia.png',
        )
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
