<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSavedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('Saveds'))
            return ;

        Schema::create('Saveds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("user_id")->nullable();
            $table->text("job_ids")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Saveds');
    }
}
