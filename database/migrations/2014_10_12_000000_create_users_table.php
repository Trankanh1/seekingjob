<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('Users'))
        return ;
        Schema::create('Users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->string('title')->nullable();
            $table->integer('date_of_birth')->nullable();
            $table->string('location')->nullable();
            $table->string("email");
            $table->string("phone")->nullable();
            $table->string("metatype")->nullable();
            $table->string("description")->nullable();
            $table->text("experiences")->nullable();
            $table->text("skills")->nullable();
            $table->text("education")->nullable();
            $table->text("licenses_certifications")->nullable();
            $table->text("data")->nullable();
            $table->string("password");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Users');
    }
}
