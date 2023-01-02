<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('trainer_id');
            $table->string('product_id');
            $table->string('name');
            $table->string('status')->default('active');
            $table->string('description');
            $table->string('quiz_title');
            $table->string('duration');
            $table->string('attempts');
            $table->string('passing_criteria');
            $table->string('points_per_quesiton');
            $table->string('charges');





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
        Schema::dropIfExists('courses');
    }
}
