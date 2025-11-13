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
        Schema::create('meeting_rooms', function (Blueprint $table) {
            $table->id();
            // $table->string('kod_bilik')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();
            $table->foreign('status')->references('code')->on('codes')->onDelete('set null');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_rooms');
    }
};
