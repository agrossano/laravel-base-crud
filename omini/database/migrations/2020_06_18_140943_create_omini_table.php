<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOminiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('omini', function (Blueprint $table) {
            $table -> id();
            $table -> string('first name');
            $table -> string('last name');
            $table -> string('code');
            $table -> string('state');
            $table -> string('phone number');
            $table -> string('role');
          
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
        Schema::dropIfExists('omini');
    }
}
