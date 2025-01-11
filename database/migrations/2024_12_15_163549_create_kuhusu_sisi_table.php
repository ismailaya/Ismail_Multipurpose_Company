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
        Schema::create('kuhusu_sisi', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->text('abbr')->nullable();
            $table->text('address')->nullable();
            $table->text('phone1')->nullable();
            $table->text('phone2')->nullable();
            $table->text('email1')->nullable();
            $table->text('email2')->nullable();
            $table->text('working_hour')->nullable();
            $table->text('pobox')->nullable();
            $table->text('muundo')->nullable();
            $table->text('logo')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('telegram')->nullable();
            $table->text('youtube')->nullable();
            $table->longText('historia')->nullable();
            $table->longText('wasifu')->nullable();
            $table->longText('dira_dhamira_mikakati')->nullable();
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
        Schema::dropIfExists('kuhusu_sisi');
    }
};
