<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('types_id')->unsigned();
            $table->foreign('types_id')->references('id')->on('unit_types')->onDelete('cascade');
            $table->integer('parent_id')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();//it will be unique later
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
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
        Schema::dropIfExists('units');
    }
}
