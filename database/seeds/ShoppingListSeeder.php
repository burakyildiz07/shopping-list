<?php

use App\ShoppingList;
use Illuminate\Database\Seeder;

class ShoppingListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        ShoppingList::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few shoppinglists in our database:
        for ($i = 0; $i < 50; $i++) {
            ShoppingList::create([
                'product' => $faker->sentence,
                'note' => $faker->paragraph,
            ]);
        }
    }
}
