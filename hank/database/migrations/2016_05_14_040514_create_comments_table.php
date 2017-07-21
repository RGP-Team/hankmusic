<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('post_id');
            $table->integer('user_id');
			$table->integer('comment_id')->nullable();
			$table->text('message');
			$table->integer('down_votes')->default(0);
			$table->integer('up_votes')->default(0);
			$table->boolean('active')->default(true);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}
