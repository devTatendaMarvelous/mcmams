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
            $table->string('memberno');
            $table->string('name');
            $table->string('surname');
            $table->string('initials')->nullable();
            $table->date('dob');
            $table->string('company');
            $table->string('phone');
            $table->string('email');
            $table->string('natId');
            $table->mediumText('address');
            $table->char('sex');
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
