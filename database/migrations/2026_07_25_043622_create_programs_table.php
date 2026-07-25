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
        Schema::create('programs', function (Blueprint $table) {

            $table->id();

            $table->string('nama',150);

            $table->string('slug')->unique();

            $table->text('deskripsi');

            $table->string('cover')->nullable();

            $table->date('tanggal_mulai');

            $table->date('tanggal_selesai');

            $table->enum('status',[
                'Aktif',
                'Nonaktif'
            ])->default('Aktif');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
