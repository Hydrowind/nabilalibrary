<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('title');
            $table->integer('year');
            $table->string('author');
            $table->string('publisher');
            $table->integer('page');
            $table->string('category');
            $table->integer('quantity');
            $table->string('coverUrl')->nullable();
            $table->string('description')->nullable();
            $table->text('synopsis')->nullable();
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
        Schema::dropIfExists('books');
    }
};
