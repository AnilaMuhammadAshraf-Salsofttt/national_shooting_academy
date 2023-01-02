<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsInCourseSyllabiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('course_syllabi', function (Blueprint $table) {
            $table->string('lecture_number')->nullable()->default(1)->after('video');
            $table->string('duration')->nullable()->default(10)->after('lecture_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_syllabi', function (Blueprint $table) {
            //
            $table->dropColumn(['lecture_number','duration']);
        });
    }
}
