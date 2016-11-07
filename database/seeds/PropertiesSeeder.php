<?php

use App\Property;
use App\PropertyDetail;
use App\PropertyImage;
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
        factory(Property::class, 1000)->create()
            ->each(function (Property $property) {
                $property->details()->save(factory(PropertyDetail::class)->make());

                $property->images()->save(factory(PropertyImage::class)->make());
                $property->images()->save(factory(PropertyImage::class)->make());
                $property->images()->save(factory(PropertyImage::class)->make());
                $property->images()->save(factory(PropertyImage::class)->make());
            });
    }
}
