<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblGhiChu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_GhiChu', function (Blueprint $table) {
            $table->increments('Note_id');
            $table->integer('customer_id');
            $table->string('Note_name');
            $table->string('Note_email');
            $table->string('Note_address');
            $table->string('Note_phone');

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
        Schema::dropIfExists('tbl_GhiChu');
    }
}
