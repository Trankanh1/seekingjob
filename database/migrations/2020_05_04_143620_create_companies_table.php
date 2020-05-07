<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('Companies'))
            return ;

        Schema::create('Companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name", 255)->nullable();
            $table->string("website", 255)->nullable();
            $table->string("head_quarter",255)->nullable();
            $table->string("found", 255)->nullable();
            $table->string("industry",255)->nullable();
            $table->string("size", 255)->nullable();
            $table->integer("user_id")->nullable();
            $table->text("photos")->nullable();
            $table->text("description")->nullable();
            $table->text("data")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Companies');
    }
}
