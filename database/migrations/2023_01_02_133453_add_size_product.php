<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSizeProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_color_images', function (Blueprint $table) {
            $table->tinyinteger('small')->default(0);
            $table->tinyinteger('medium')->default(0);
             $table->tinyinteger('large')->default(0);
              $table->tinyinteger('xlarge')->default(0);
               $table->tinyinteger('xxlarge')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_color_images', function (Blueprint $table) {
            //
        });
    }
}
