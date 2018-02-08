<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();
        $limit = 20;

        for($i = 0 ;$i < $limit; $i++)
        {
            DB::table('tb_rekening')->insert (
            [
                'No_Rekening' => $faker -> No_Rekening,
                'Id_Nasabah' => $faker -> Id_Nasabah,
                'Saldo' => $faker -> Saldo,
                'Status' => $faker -> Status,
            ]);
        }
    }
}
