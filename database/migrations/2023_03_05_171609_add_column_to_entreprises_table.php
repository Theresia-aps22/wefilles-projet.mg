<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('entreprises', function (Blueprint $table) {
            $table->string('numero')->nullable();
            $table->string('email')->nullable();
            $table->string('url')->nullable();
            $table->string('page_fb')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('recrutement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entreprises', function (Blueprint $table) {
            //
        });
    }
}
