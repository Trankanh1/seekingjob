<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('Jobs'))
            return ;

        Schema::create('Jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("company_name", 255)->nullable();
            $table->integer("company_id")->nullable();
            $table->string("metatype", 32)->nullable();
            $table->string("location", 255)->nullable();
            $table->string("title", 255)->nullable();
            $table->text("description")->nullable();
            $table->integer("since")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Jobs');
    }
}
