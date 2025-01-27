<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class ArtisanController extends Controller
{
    private function output()
    {
        return "<pre>" . Artisan::output() . "</pre>";
    }

    public function runLatestMigrations()
    {
        Artisan::call('migrate', [
            '--path' => [
                'database/migrations/2025_01_23_224003_create_tags_table.php',
                'database/migrations/2025_01_23_224039_create_blog_categories_table.php',
                'database/migrations/2025_01_23_224046_create_blogs_table.php',
                'database/migrations/2025_01_23_224229_create_blog_tag_table.php',
            ]
        ]);
        return $this->output();
    }

    public function symLink()
    {
        Artisan::call('storage:link');
        return $this->output();
    }
}
