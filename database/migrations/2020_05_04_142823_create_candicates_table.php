<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandicatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('Candicates'))
            return ;

        Schema::create('Candicates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("company_id")->nullable();
            $table->integer("job_id")->nullable();
            $table->longText("file")->nullable();
            $table->text("fullname")->nullable();
            $table->text("address")->nullable();
            $table->char("phone",24)->nullable();
            $table->char("email",24)->nullable();
            $table->integer("user_id")->nullable();
            $table->integer("since")->nullable();
            $table->text("job_export")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Candicates');
    }
}
