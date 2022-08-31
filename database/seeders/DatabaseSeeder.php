<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\TodoItem; 
use \App\Models\Continent; 
use \App\Models\Country; 
use \App\Models\Product; 

class DatabaseSeeder extends Seeder
{
    private $continents = [
            ['name' => 'Europe'],
            ['name' => 'Asia'],
            ['name' => 'Africa'],
            ['name' => 'South America'],
            ['name' => 'North America'],
        ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //TodoItem seeder
        TodoItem::factory(10)->create();

        //Continent seeder
        foreach ($this->continents as $continent) {
            Continent::create($continent)->each(function ($c) {
                //Country seeder
                $c->countries()->saveMany(Country::factory(3)->make());
            });
        }

        //Product seeder
        Product::factory(100)->create();
    }
}
