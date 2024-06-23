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
        // Create posts table
        Schema::create('posts', function (Blueprint $table) { 
            $table->id(); 
            $table->string('title');
            $table->string('categorie');
            $table->text('description'); 
            $table->string('location');
            $table->integer('price'); 
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
        });

        // Create post_images table
        Schema::create('post_images', function (Blueprint $table){ 
            $table->id(); 
            $table->string('img_url');
            $table->foreignId('post_id')->constrained()->onDelete('cascade');
        });

        // Create likes table
        Schema::create('likes', function (Blueprint $table){ 
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); 
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');      
        Schema::dropIfExists('post_images'); 
        Schema::dropIfExists('posts'); 
    }
};
