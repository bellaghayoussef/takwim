<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->timestamps();
            $table->string('title', 255)->nullable();
            $table->string('post')->nullable();
            $table->string('notes', 1000)->nullable();
            $table->string('etat')->nullable();
            $table->string('rating')->nullable();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('evaluator_id')->unsigned()->nullable()->index();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('evaluations');
    }
}
