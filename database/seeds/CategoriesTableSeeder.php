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
                'type' => 'haha',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Arcade',
                'type' => 'hehe',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Car',
                'type' => 'huhu',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'FPS',
                'type' => 'hihi',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'TPS',
                'type' => 'ihih',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Battle',
                'type' => 'ehe',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Test1',
                'type' => 'test1',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'test2',
                'type' => 'ez',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Test3',
                'type' => 'Test3',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'Test4',
                'type' => 'Test4',
                'created_at' => '2021-01-02',
                'updated_at' => '2021-01-02',
            ),
        ));


    }
}
