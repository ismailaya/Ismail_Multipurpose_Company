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
        Schema::create('machapisho', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title'); // Title of the chapisho
            $table->text('details')->nullable(); // Details of the chapisho
            $table->text('file')->nullable(); // Details of the chapisho
            $table->unsignedBigInteger('created_by'); // User ID who created the chapisho
            $table->enum('status', ['0', '1'])->default('1'); // Status with default as '1'
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machapisho');
    }
};
