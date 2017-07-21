<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateI18nLanguageCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i18n_language_codes', function (Blueprint $table) {
            $table->char('3letter', 3);
            $table->string('2letter', 2);
			$table->string('english_name');
			$table->string('french_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('i18n_language_codes');
    }
}
