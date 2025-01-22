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
        Schema::table('products', function (Blueprint $table) {
            $table->string('logomaker_left')->default(null)->nullable()->change();
            $table->string('logomaker_top')->default(null)->nullable()->change();
            $table->string('logomaker_font_size')->default(null)->nullable()->change();
            $table->string('preview_left')->default(null)->nullable()->change();
            $table->string('preview_top')->default(null)->nullable()->change();
            $table->string('preview_font_size')->default(null)->nullable()->change();
            $table->string('canva_left')->default(null)->nullable()->change();
            $table->string('canva_top')->default(null)->nullable()->change();
            $table->string('canva_font_size')->default(null)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
};
