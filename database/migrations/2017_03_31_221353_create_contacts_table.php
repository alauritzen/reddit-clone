<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('email', 100)->unique();
            $table->string('first_name', 40);
            $table->string('last_name', 40);
            $table->integer('number');
            $table->timestamps();
        });

        Schema::create('posts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 140);
            $table->string('url', 250);
            $table->string('content', 1500);
            $table->integer('created_by')->unsigned();
            $table->timestamps();
        });

        Schema::create('votes', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->integer('vote');
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
        //
    }
}
