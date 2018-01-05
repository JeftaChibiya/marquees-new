<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shapes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();           
            $table->timestamps();
        }); 

        Schema::create('shape_product', function (Blueprint $table) {
            $table->integer('shape_id');
            $table->integer('product_id'); 
            $table->primary(['shape_id', 'product_id']);
        });         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shapes');        
        Schema::dropIfExists('shape_product');         
    }
}
