<?php

use Phinx\Seed\AbstractSeed;

class Users extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      $data = [];
      for ($i = 0; $i < 10; $i++) {
          $data[] = [
              'user_id'      => $faker->randomDigit,
          ];
      }
      $this->insert('user_logins', $data);
    }
}
