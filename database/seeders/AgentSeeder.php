<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('agents')->insert([
            'nom' => fake()->name(),
            'postnom' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'date' => Carbon::parse('2000-01-01'),
            'sexe' => 'm',
            'matricule' => '',
            'entreprise' => 'cvm',
            'fonction' => 'adherant',
            'localite' => 'kinshasa',
            'federation' => 'gombe',
            'password' => Hash::make('1234'),
        ]);
    }
}
