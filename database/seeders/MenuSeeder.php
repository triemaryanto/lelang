<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            ['title' => 'Home', 'parent_id' => 0, 'slug' => '/'],
            ['title' => 'Pages', 'parent_id' => 0, 'slug' => '/pages'],
            ['title' => 'Our Services', 'parent_id' => 2, 'slug' => '/our-services'],
            ['title' => 'About', 'parent_id' => 2, 'slug' => '/about'],
            ['title' => 'About Team', 'parent_id' => 4, 'slug' => '/about-team'],
            ['title' => 'About Clients', 'parent_id' => 4, 'slug' => '/about-clients'],
            ['title' => 'Contact Team', 'parent_id' => 5, 'slug' => '/contact-team'],
            ['title' => 'Contact Clients', 'parent_id' => 6, 'slug' => '/contact-clients'],
            ['title' => 'Contact', 'parent_id' => 2, 'slug' => '/contact'],
            ['title' => 'Portfolio', 'parent_id' => 2, 'slug' => '/portfolio'],
            ['title' => 'Gallery', 'parent_id' => 2, 'slug' => '/gallery']
        ];
        foreach ($menus as $menu) {
            Menu::Create($menu);
        }
    }
}
