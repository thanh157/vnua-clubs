<?php

namespace Database\Factories;

use App\Models\Document;
use App\Models\Budget;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BudgetDocument>
 */
class DocumentFactory extends Factory
{
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'budget_id' => Budget::inRandomOrder()->first()->id, // Tạo một budget giả
            'img' => $this->faker->imageUrl(640, 480, 'business', true), // Sử dụng faker để tạo một URL ảnh giả
        ];
    }
}
