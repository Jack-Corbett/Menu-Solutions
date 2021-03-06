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
        $this->call([UsersTableSeeder::class,
            GroupsTableSeeder::class,
            IngredientsTableSeeder::class,
            RecipesTableSeeder::class,
            Ingredient_RecipeTableSeeder::class]);
    }
}
