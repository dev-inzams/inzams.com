<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('meta_title');

            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->string('full_image')->nullable();
            $table->string('clients')->nullable();
            $table->string('budget')->nullable();
            $table->string('duration')->nullable();
            $table->string('delivery_date')->nullable();
            $table->longText('description')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('keywords')->nullable();

            $table->unsignedBigInteger('project_category_id');
            $table->foreign('project_category_id')->references('id')->on('project_categories');


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
