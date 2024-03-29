<?php

use  App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['Project Manager', 'Software Architect/Engineer', 'DevOps Engineer', 'Full Stack Developer', 'Fronted Developer', 'Backend Developer',  'System Administrator', 'DB Administrator', 'UI/UX Designer', 'QA Engineer'];
        
        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->slug = Str::slug($new_tag->name);
            $new_tag->save();
        }
    }
}
