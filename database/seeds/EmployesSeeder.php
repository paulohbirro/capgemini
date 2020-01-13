<?php

use App\Employes;
use Illuminate\Database\Seeder;

class EmployesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Employess = Employes::create([
            'name' => "Paulo Birro",
            'phone' => "(031)975205232",
            'countrie_id' => 1,
        ]);
        $Employess = Employes::create([
            'name' => "Rogerio Costa",
            'phone' => "(031)999999999",
            'countrie_id' => 1,
        ]);
        $Employess = Employes::create([
            'name' => "Kananda silva",
            'phone' => "(031)33333333",
            'countrie_id' => 4,
        ]);
        $Employess = Employes::create([
            'name' => "Ari",
            'phone' => "(031)555555555",
            'countrie_id' => 1,
        ]);
        $Employess = Employes::create([
            'name' => "Fabiana Capgemini",
            'phone' => "(031)777777777",
            'countrie_id' => 2,
        ]);
        $Employess = Employes::create([
            'name' => "Bill Gates",
            'phone' => "(031)888888888",
            'countrie_id' => 3,
        ]);
    }
}
