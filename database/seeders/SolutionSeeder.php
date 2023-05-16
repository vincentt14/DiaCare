<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solution::create([
            'disease_id' => 2,
            'solution' => 'Learn ways to lower your stress. Try deep breathing, gardening, taking a walk, meditating, working on your hobby, or listening to your favorite music.',
        ]);
        Solution::create([
            'disease_id' => 2,
            'solution' => 'Choose foods that are lower in calories, saturated fat, trans fat, sugar, and salt.',
        ]);
        Solution::create([
            'disease_id' => 2,
            'solution' => 'Eat foods with more fiber, such as whole grain cereals, breads, crackers, rice, or pasta.',
        ]);
        Solution::create([
            'disease_id' => 3,
            'solution' => 'Learn ways to lower your stress. Try deep breathing, gardening, taking a walk, meditating, working on your hobby, or listening to your favorite music.',
        ]);
        Solution::create([
            'disease_id' => 3,
            'solution' => 'Choose foods that are lower in calories, saturated fat, trans fat, sugar, and salt.',
        ]);
        Solution::create([
            'disease_id' => 3,
            'solution' => 'Drink water instead of juice and regular soda.',
        ]);
        Solution::create([
            'disease_id' => 3,
            'solution' => 'Work out at least 150 minutes of exercise each week, divided into 5 sessions or days, 30 minutes per session. Use stretch bands, do yoga, heavy gardening (digging and planting with tools), or try push-ups.',
        ]);
        Solution::create([
            'disease_id' => 4,
            'solution' => 'Choose foods such as fruits, vegetables, whole grains, bread and cereals, and low-fat or skim milk and cheese.',
        ]);
    }
}