<?php

use App\Models\Font;
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
            $table->after('sub_category_id', function (Blueprint $table) {
                $table->string('color')->default(null);
                $table->foreignIdFor(Font::class)->default(null);
                $table->string('logomaker_left')->default(null);
                $table->string('logomaker_top')->default(null);
                $table->string('logomaker_font_size')->default(null);
                $table->string('preview_left')->default(null);
                $table->string('preview_top')->default(null);
                $table->string('preview_font_size')->default(null);
                $table->string('canva_left')->default(null);
                $table->string('canva_top')->default(null);
                $table->string('canva_font_size')->default(null);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn([
                'color',
                'font_id',
                'logomaker_left',
                'logomaker_top',
                'logomaker_font_size',
                'preview_left',
                'preview_top',
                'preview_font_size',
                'canva_left',
                'canva_top',
                'canva_font_size'
            ]);
        });
    }
};
