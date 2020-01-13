<?php

use App\Countrie;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Countrie::create([
            'name' => "Brasil"
        ]);

        $countries = Countrie::create([
            'name' => "Chile"
        ]);
        $countries = Countrie::create([
            'name' => "Paraguai"
        ]);
        $countries = Countrie::create([
            'name' => "Peru"
        ]);
        $countries = Countrie::create([
            'name' => "Colombia"
        ]);
        $countries = Countrie::create([
            'name' => "Uruguai"
        ]);
        $countries = Countrie::create([
            'name' => "Equador"
        ]);
        
     
    }
}
