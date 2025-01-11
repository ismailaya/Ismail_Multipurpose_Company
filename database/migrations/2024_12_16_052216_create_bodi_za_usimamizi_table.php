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
        Schema::create('bodi_za_usimamizi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('details')->nullable();
            $table->json('majukumu')->nullable();
            $table->unsignedBigInteger('created_by');
            $table->enum('status', ['0', '1'])->default('1'); // Status with default as '1'
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bodi_za_usimamizi');
    }
};
