<?php

use App\Models\Questionare;
use Illuminate\Database\Seeder;

class QuestionareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kuisioner = [
            [ 'id'    => 1,'user_id' =>1, 'title' => 'Covid 19', 'created_at'=>now(), 'updated_at'=>now()],
        ];

        Questionare::insert($kuisioner);
    }
}
