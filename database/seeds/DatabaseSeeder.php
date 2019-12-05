<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CarouselTableSeeder::class);
        $this->call(CommunityTableSeeder::class);
        $this->call(Fixed_imageTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(SectionImageTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(DescriptionsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(TitlesTableSeeder::class);
        $this->call(SubtitlesTableSeeder::class);
    }
}
