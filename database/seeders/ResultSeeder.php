<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

use App\Models\User;
use App\Models\Question;

class ResultSeeder extends Seeder{
    
    public function run()
    {
        $questionIds = Question::pluck('id'); 

        foreach (User::all() as $user) {
            $randomQuestionIds = $questionIds->random(20)->toArray();

            $user->questions()->syncWithoutDetaching($randomQuestionIds);
        }
    }
    
}
