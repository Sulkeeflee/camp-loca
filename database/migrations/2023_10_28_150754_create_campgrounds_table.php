<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { 
        Schema::create('campgrounds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author')->nullable();
            $table->foreign('author')->references('id')->on('users')->nullable();
            $table->string('title')->nullable();
            $table->string('location')->nullable();
            $table->string('description')->nullable();
            $table->string('catagory')->nullable();
            $table->json('geometry')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('campgrounds');
    }
}
