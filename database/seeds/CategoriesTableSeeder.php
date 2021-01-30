<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Adventure',
                'type' => 'Pegi 3',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Arcade',
                'type' => 'Pegi 7',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Car',
                'type' => 'Pegi 3',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'FPS',
                'type' => 'Pegi 18',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Moto',
                'type' => 'Pegi 12',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Battle Royal',
                'type' => 'Pegi 12',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'FootBall',
                'type' => 'Pegi 3',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'BasketBall',
                'type' => 'Pegi 3',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Combat',
                'type' => 'Pegi 18',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Society game',
                'type' => 'Pegi 3',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
        ));


    }
}
