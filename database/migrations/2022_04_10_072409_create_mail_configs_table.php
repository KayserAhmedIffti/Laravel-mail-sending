<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailConfigsTable extends Migration
{
    /**
     * Run the migrations .
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mail_configs', function (Blueprint $table) {
            $table->id(); 
            $table->string('Driver');
            $table->string('Host');  
            $table->integer('Port');
            $table->string('Username');
            $table->string('Password');
            $table->string('Encryption');
            
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
        Schema::dropIfExists('mail_configs');
    }
}
