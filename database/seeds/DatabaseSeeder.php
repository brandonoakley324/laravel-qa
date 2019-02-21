<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 3 )->create()->each(function($u){
            //Create some questions for each created user
            $u->questions()
              ->saveMany(
                  factory(App\Question::class , rand(1,5))->make()
              );
        });
        //factory(App\Question::class, 10 )->create(); cant do that because references user_id

    }
}
