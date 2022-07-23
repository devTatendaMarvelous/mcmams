<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependends', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('member_id')->references('id')->on('members')->onDelete('cascade');  
            $table->string('name');
            $table->string('surname');
            $table->date('dob');
            $table->mediumText('ailments')->nullable();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('natId');
            $table->char('sex');
            $table->string('photo');
            $table->mediumText('address');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dependends');
    }
};
