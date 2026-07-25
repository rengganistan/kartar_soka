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
        Schema::create('activities', function (Blueprint $table) {

            $table->id();

            // Admin yang membuat kegiatan
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('title', 200);

            $table->string('slug')->unique();

            $table->longText('description');

            $table->string('location');

            $table->date('activity_date');

            $table->string('poster')->nullable();

            $table->enum('status', [
                'Upcoming',
                'Completed'
            ])->default('Upcoming');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
