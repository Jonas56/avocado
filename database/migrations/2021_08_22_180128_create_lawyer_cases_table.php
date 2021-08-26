<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyerCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyer_cases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->text('description');
            $table->string('judge_name');
            $table->string('enemy');
            $table->string('place');
            $table->text('result')->nullable();
            $table->string('status')->default('open');
            $table->string('priority')->default('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lawyer_cases');
    }
}