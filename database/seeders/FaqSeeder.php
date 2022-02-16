<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'Test question',
            'answer' => 'Test answer',
        ]);

        DB::table('faqs')->insert([
            'question' => 'Test question2',
            'answer' => 'Test answer2',
        ]);

        DB::table('faqs')->insert([
            'question' => 'Test question3',
            'answer' => 'Test answer3',
        ]);
    }
}
