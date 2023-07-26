<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('whithers', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->binary('photo');
            $table->float('price');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('whithers');
    }
};
