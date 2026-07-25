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
        Schema::create('members', function (Blueprint $table) {

            $table->id();

            $table->foreignId('organization_structure_id')
                ->constrained()
                ->restrictOnDelete();

            $table->string('nama',100);
            $table->string('nik',20)->nullable();

            $table->enum('jenis_kelamin',[
                'L',
                'P'
            ]);

            $table->string('tempat_lahir',100)->nullable();

            $table->date('tanggal_lahir')->nullable();

            $table->text('alamat');

            $table->string('no_hp',20)->nullable();

            $table->string('foto')->nullable();

            $table->enum('status',[
                'Aktif',
                'Tidak Aktif'
            ])->default('Aktif');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
