<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrivateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("private_messages",function (Blueprint $table){
            $table->bigIncrements("id");
            $table->integer("user_id")->unsigned();
            $table->integer("chat_id")->unsigned();
            $table->string("text");
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
        Schema::drop("messages");
    }
}
