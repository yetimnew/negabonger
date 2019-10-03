<?php

use App\models\Menu;
use Illuminate\Database\Seeder;

class MenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Menu::class,10)->create();
    }
}
