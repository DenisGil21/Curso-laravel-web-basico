<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
        $curso->name = 'Laravel';
        $curso->description = 'Framework php';
        $curso->categoria = 'Desarrollo web';
        $curso->save();
    }
}
