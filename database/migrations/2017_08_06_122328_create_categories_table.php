<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('brief_desc'); 
            $table->string('cover_image')->nullable();                        
            $table->timestamps();
        }); 

        Schema::create('category_product', function (Blueprint $table) {
            $table->integer('category_id');
            $table->integer('product_id'); 
            $table->primary(['category_id', 'product_id']);
        });      
        
        Schema::create('category_event', function (Blueprint $table) {          
            $table->integer('category_id');
            $table->integer('event_id'); 
            $table->primary(['category_id', 'event_id']);            
        });          
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');        
        Schema::dropIfExists('category_product'); 
        Schema::dropIfExists('category_event');         
    }
}
