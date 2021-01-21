<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{


    public function run()
{


\DB::table('products')->delete();

\DB::table('products')->insert(array (
0 =>
array (
'id' => 1,
'name' => 'Mario et Sonic aux JO',
'image_name' => '1.jpg',
'description' => 'test desc',
'price' => 21,
'discount' => 20.99,
'category_id' => 1,
    'created_at' => '2021-01-01',
    'updated_at' => '2021-01-01',
),
1 =>
array (
'id' => 2,
'name' => 'GTA V',
'image_name' => '1.jpg',
'description' => 'gta woua trop bien blabla',
'price' => 45,
'discount' => 30,
'category_id' => 1,
    'created_at' => '2021-01-01',
    'updated_at' => '2021-01-01',
),
2 =>
array (
'id' => 3,
'name' => 'Minecraft',
'image_name' => '1.jpg',
'description' => 'creeper mwéééé',
'price' => 100,
'discount' => 90,
'category_id' => 7,
    'created_at' => '2021-01-01',
    'updated_at' => '2021-01-01',
),
3 =>
array (
'id' => 4,
'name' => 'Valorant',
'image_name' => '1.jpg',
'description' => 'poum poum',
'price' => 5,
'discount' => 2.99,
'category_id' => 2,
'created_at' => '2021-01-01',
'updated_at' => '2021-01-01',
),
4 =>
array (
'id' => 5,
'name' => 'Genshin',
'image_name' => '1.jpg',
'description' => 'miam diona paimon chichi',
'price' => 200,
'discount' => 100,
'category_id' => 2,
'created_at' => '2021-01-01',
'updated_at' => '2021-01-01',
),
5 =>
array (
'id' => 6,
'name' => '>DBLegends',
'image_name' => '1.jpg',
'description' => 'gokuuu',
'price' => 99,
'discount' => 50,
'category_id' => 3,
'created_at' => '2021-01-01',
'updated_at' => '2021-01-01',
),
));


}
}
