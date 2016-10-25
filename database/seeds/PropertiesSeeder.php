<?php

use Illuminate\Database\Seeder;

class PropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Property::class, 1000)->create()
            ->each(function ($property) {
                $property->details()->save(factory(App\PropertyDetail::class)->make());
            });
    }
}
