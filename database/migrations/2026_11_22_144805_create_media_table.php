<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
{
    Schema::create('media', function (Blueprint $table) {
        $table->id();
        $table->string('title')->unique();
        $table->string('category');
        $table->json('genres');
        $table->decimal('rating', 3, 1)->default(0);
        $table->text('synopsis')->nullable();
        $table->unsignedSmallInteger('unit_count')->default(1);
        $table->timestamps();
    });
}

public function down(): void
{
    Schema::dropIfExists('media');
}
};
