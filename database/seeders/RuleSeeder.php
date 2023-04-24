<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rule::create([
            'disease_id' => 1,
            'symptom_id' => 1,
            'rule_value' => 0
        ]);

        Rule::create([
            'disease_id' => 1,
            'symptom_id' => 2,
            'rule_value' => 0
        ]);

        Rule::create([
            'disease_id' => 2,
            'symptom_id' => 1,
            'rule_value' => 1
        ]);
        Rule::create([
            'disease_id' => 2,
            'symptom_id' => 2,
            'rule_value' => 0
        ]);

        Rule::create([
            'disease_id' => 3,
            'symptom_id' => 1,
            'rule_value' => 1
        ]);
        Rule::create([
            'disease_id' => 3,
            'symptom_id' => 2,
            'rule_value' => 1
        ]);

        Rule::create([
            'disease_id' => 4,
            'symptom_id' => 1,
            'rule_value' => 0
        ]);
        Rule::create([
            'disease_id' => 4,
            'symptom_id' => 2,
            'rule_value' => 1
        ]);
        
    }
}
