<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('Interviews'))
            return ;

        Schema::create('Interviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("user_id");
            $table->string("employer_name",255)->nullable();
            $table->string("job_title",255)->nullable();
            $table->integer("process_exp")->nullable();
            $table->text("interview_description")->nullable();
            $table->text("questions")->nullable();
            $table->integer("interview_difficulty")->nullable();
            $table->integer("interview_outcome")->nullable();
            $table->text("interview_place")->nullable();
            $table->integer("since")->nullable();
            $table->integer("company_id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Interviews');
    }
}
