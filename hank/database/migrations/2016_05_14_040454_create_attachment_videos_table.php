<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachmentVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachment_videos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
			$table->integer('post_id');
			$table->integer('comment_id')->nullable();
			$table->string('photo_id');
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
        Schema::drop('attachment_videos');
    }
}
