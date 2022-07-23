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
        Schema::create('dependend_accounts', function (Blueprint $table) {
             $table->id();
            $table->foreignId('dependend_id')->references('id')->on('dependends')->onDelete('cascade');
            
            $table->string('memberno');
            $table->integer('suffix');
            $table->float('balance');
            $table->float('claimed');
           
            $table->string('status');
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
        Schema::dropIfExists('dependend_accounts');
    }
};
