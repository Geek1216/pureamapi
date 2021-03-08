<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('subject');
            $table->string('yes_no_question')->nullable();
            $table->string('upload_title')->nullable();
            $table->string('comment_title')->nullable();
            $table->boolean('is_public')->default(false);
            $table->boolean('truthy')->default(true);
            $table->boolean('yes_no')->default(false);
            $table->boolean('upload')->default(false);
            $table->boolean('comment')->default(false);

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
