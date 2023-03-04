<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mugs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('item_name');
            $table->integer('price');
            $table->text('detail');
            $table->text('important_information');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mugs');
    }
};
