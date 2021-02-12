<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class catalogo_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 20; $i++){
            DB::table('roles')->insert(array(
                'name' => 'Cereza' . $i,
                'active' => 1
            ));
        }

        $this->command->info('La tabla roles ha sido rellenada');

    }
}
