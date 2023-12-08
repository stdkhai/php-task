<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Product;

class ProductFactory extends Factory{


    public function definition(): array{
        $urls = ['image_test_1.jpg', 'image_test_2.jpg', 'image_test_3.jpg', 'image_test_4.jpg', 'image_test_5.jpg', 'image_test_6.jpg'];
        $date = fake()->dateTimeThisMonth();  
        return [
                'name' => fake()->sentence(2),
                'price' => fake()->randomFloat(2, 10, 100),
                'description' => fake()->paragraph,
                'photo_url' => fake()->randomElement($urls),
                'created_at' => $date,
                'updated_at' => $date,
            ];        
    }
   
    
}
