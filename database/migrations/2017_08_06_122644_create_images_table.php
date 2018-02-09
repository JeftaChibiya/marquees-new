<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('path');
            $table->string('dropbox_id')->nullable();            
            $table->string('thumbnail_path')->nullable(); // a thumbnail is optional for a photo
            $table->boolean('cover')->default(false); // default value set as 'false' to avoid a 'null' error
            $table->boolean('outside')->default(false);
            $table->boolean('inside')->default(false);                        
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
        Schema::dropIfExists('images');       
    }
}