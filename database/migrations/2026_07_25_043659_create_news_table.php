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
        Schema::create('news', function (Blueprint $table) {

            $table->id();

            // Kategori Berita
            $table->foreignId('news_category_id')
                ->constrained()
                ->restrictOnDelete();

            // Admin yang membuat berita
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('title', 200);

            $table->string('slug')->unique();

            $table->longText('content');

            $table->string('thumbnail')->nullable();

            $table->enum('status', [
                'Draft',
                'Published'
            ])->default('Draft');

            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
