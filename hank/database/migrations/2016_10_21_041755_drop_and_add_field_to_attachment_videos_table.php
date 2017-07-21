<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropAndAddFieldToAttachmentVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attachment_videos', function (Blueprint $table) {
			$table->dropColumn('photo_id');
            $table->string('embed_url')->after('comment_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attachment_videos', function (Blueprint $table) {
            $table->dropColumn('embed_url');
        });
    }
}
