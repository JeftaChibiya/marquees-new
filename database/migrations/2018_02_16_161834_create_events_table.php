<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title'); 
            $table->string('cover_image');             
            $table->string('testimony')->nullable();                        
            $table->string('desc')->nullable();            
            $table->timestamps();
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
        Schema::dropIfExists('events');
        Schema::dropIfExists('category_event');        
    }
}
