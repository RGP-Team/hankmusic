<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('free_word_limit')->default(75);
            $table->integer('premium_word_limit')->default(150);
			$table->string('paypal_merchant_email')->nullable();
			$table->text('copyright')->nullable();
			$table->string('contact_number')->nullable();
			$table->string('contact_email')->nullable();
			$table->text('contact_text')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('settings');
    }
}
