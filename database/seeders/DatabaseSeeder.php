<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\College;
use App\Models\Person;
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
        City::create([
            "Nombre" => "Barranquilla",
            "Description" => "bq"
        ]);
        City::create([
            "Nombre" => "Bogota",
            "Description" => "dc"
        ]);
	    College::create([
            "nombre" => "cues",
            "idCiudad" => 1
        ]);
        College::create([
            "nombre" => "atlantico",
            "idCiudad" => 2
        ]);
        Person::create([
            "nombre" => "Andres",
            "edad" => 18,
            "fechaNacimiento" => "2003-05-26",
            "idUniversidad" => 1,
            "idCiudad" => 1
        ]);
    }
}
