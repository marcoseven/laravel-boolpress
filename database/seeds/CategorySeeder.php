<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['html', 'css', 'javascript', 'vuejs', 'sql', 'php', 'laravel'];
        foreach ($categories as $category) {
            $new_cat = new Category();
            $new_cat->name = $category;
            $new_cat->slug = Str::slug($new_cat->name);
            $new_cat->save();
        }
    }
}
