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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};

/**
 * php artisan migrate --path="database\migrations\2025_01_23_224003_create_tags_table.php" --path="database\migrations\2025_01_23_224039_create_blog_categories_table.php" --path="database\migrations\2025_01_23_224046_create_blogs_table.php" --path="database\migrations\2025_01_23_224229_create_blog_tag_table.php"
 */
