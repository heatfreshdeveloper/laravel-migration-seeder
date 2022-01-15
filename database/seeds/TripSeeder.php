<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrip = new Trip();
            $newTrip->name = $faker->text(random_int(50, 80));
            $newTrip->description = $faker->text(random_int(150, 250));
            $newTrip->days = $faker->randomNumber(2);
            $newTrip->price = $faker->randomFloat(2, 1000, 3000);
            $newTrip->available = true;
            $newTrip->save();
        }
    }
}
