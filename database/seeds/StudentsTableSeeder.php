<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Student;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) {
          $new_student = new Student();
          $new_student->first_name = $faker->firstname;
          $new_student->last_name = $faker->lastname;
          $new_student->matricola = $faker->numberBetween(100 , 450);
          $new_student->email = $faker->email;
          $new_student->save();
        }
    }
}
