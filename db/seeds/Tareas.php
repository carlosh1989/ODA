<?php

use Phinx\Seed\AbstractSeed;

class Tareas extends AbstractSeed
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
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'usuario_id'   => 1,
                'titulo'        => $faker->word,
                'body'          => $faker->text($maxNbChars = 500),
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ];
        }

        $this->insert('tareas', $data);
    }
}
