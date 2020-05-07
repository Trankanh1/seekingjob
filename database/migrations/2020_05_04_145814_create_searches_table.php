<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('Searches'))
            return ;

        Schema::create('Searches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("user_id")->nullable();
            $table->integer("job_id")->nullable();
            $table->text("query")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Searches');
    }
}
