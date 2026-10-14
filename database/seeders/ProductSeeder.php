<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            // 7 Individual Live Products
            [
                'name' => 'Plantain Crunchlets , Pack of 2 (480g Each), Crispy Frozen Snack, Gluten-Free, Vegan, Air Fryer Ready',
                'slug' => 'plantain-crunchlets',
                'category' => 'frozen',
                'description' => 'Air-fryer-ready plantain snack. Crispy, golden, and packed with whole root goodness.',
                'price' => 16.00,
                'image_path' => 'images/prod-plantain-crunchlets.png',
            ],
            [
                'name' => 'Caroonch, Lightly Fermented Shredded Carrots Salad, 12 Pack (130g Each), Refrigerated',
                'slug' => 'caroonch',
                'category' => 'fresh',
                'description' => 'Lightly fermented shredded carrot salad with a tangy, probiotic-packed crunch.',
                'price' => 30.00,
                'image_path' => 'images/prod-caroonch.png',
            ],
            [
                'name' => 'Cabbu, Smoky Garlic & Pepper Cabbage Salad, 12 Pack (130g Each), Refrigerated',
                'slug' => 'cabbu',
                'category' => 'fresh',
                'description' => 'Crisp cabbage salad infused with smoky garlic and bold cracked black pepper.',
                'price' => 30.00,
                'image_path' => 'images/prod-cabbu.png',
            ],
            [
                'name' => 'Plantain Fries, Pack of 2 (390g Each), Crispy Frozen Snack, Gluten-Free, Vegan, Air Fryer Ready',
                'slug' => 'plantain-fries',
                'category' => 'frozen',
                'description' => 'Savory golden plantain fries cooked to perfection. Crispy outside, tender inside.',
                'price' => 14.00,
                'image_path' => 'images/prod-plantain-fries.jpg',
            ],
            [
                'name' => 'Plantain Tortillas, Pack of 3 (8 Count, 320g Each), Grain-Free, Gluten-Free, Vegan, Made with Olive Oil, Soft & Flexible Wraps',
                'slug' => 'plantain-tortillas',
                'category' => 'wraps',
                'description' => 'Soft and flexible wraps made from green plantains and pure olive oil.',
                'price' => 27.00,
                'image_path' => 'images/prod-plantain-tortillas.jpg',
            ],
            [
                'name' => 'Taro Fries, Pack of 2 (390g Each), Crispy Frozen Snack, Gluten-Free, Vegan, Air Fryer Ready',
                'slug' => 'taro-fries',
                'category' => 'frozen',
                'description' => 'Earth-rooted taro sliced into crave-worthy fries with an artisanal crunch.',
                'price' => 14.00,
                'image_path' => 'images/prod-taro-fries.jpg',
            ],
            [
                'name' => 'Taro Crunchlets, Pack of 2 (480g Each), Crispy Frozen Snack, Gluten-Free, Vegan, Air Fryer Ready',
                'slug' => 'taro-crunchlets',
                'category' => 'frozen',
                'description' => 'Rustic bite-sized taro crunchlets built for clean, fearless snacking.',
                'price' => 16.00,
                'image_path' => 'images/prod-taro-crunchlets.png',
            ],

            // 7 Authentic Signature Bundles from snubfoods.com
            [
                'name' => 'Rooted & Plant-Powered',
                'slug' => 'rooted-and-plant-powered',
                'category' => 'bundle',
                'description' => 'Plant-powered roots collection featuring crispy plantain tortillas, fries, and caroonch.',
                'price' => 25.50,
                'image_path' => 'images/bundle-rooted.png',
            ],
            [
                'name' => 'Plant-First Crunch Collection',
                'slug' => 'plant-first-crunch-collection',
                'category' => 'bundle',
                'description' => 'Featuring Cabbu, Taro Crunchlets, and Plantain Crunchlets in one power bundle.',
                'price' => 17.48,
                'image_path' => 'images/bundle-plant-first.png',
            ],
            [
                'name' => 'Clean Crunch & Comfort Bundle',
                'slug' => 'clean-crunch-and-comfort-bundle',
                'category' => 'bundle',
                'description' => 'Comfort snacking made gut-friendly with tortillas, fries, and zesty cabbage.',
                'price' => 18.48,
                'image_path' => 'images/bundle-clean-crunch.png',
            ],
            [
                'name' => 'Island Energy Collection',
                'slug' => 'island-energy-collection',
                'category' => 'bundle',
                'description' => 'Tropical plantain crunch combos engineered for sustained, slow-burning all-day energy.',
                'price' => 21.98,
                'image_path' => 'images/bundle-rooted.png',
            ],
            [
                'name' => 'Fresh Ferments Collection',
                'slug' => 'fresh-ferments-collection',
                'category' => 'bundle',
                'description' => 'Live probiotic duo pairing crisp fermented Caroonch carrots with smoky garlic Cabbu.',
                'price' => 7.00,
                'image_path' => 'images/bundle-clean-crunch.png',
            ],
            [
                'name' => 'Freezer Favorites Collection',
                'slug' => 'freezer-favorites-collection',
                'category' => 'bundle',
                'description' => 'Ultimate freezer stock-up: Plantain Crunchlets, Taro Fries, and Plantain Fries ready for the air fryer.',
                'price' => 27.45,
                'image_path' => 'images/bundle-plant-first.png',
            ],
            [
                'name' => 'Snüb Signature Collection – Variety Pack (7 Products)',
                'slug' => 'snub-signature-collection',
                'category' => 'bundle',
                'description' => 'The complete Snüb tasting tour: all 7 handcrafted frozen roots, tortillas, and fresh ferments in one mega box.',
                'price' => 45.00,
                'image_path' => 'images/hero-bags.png',
            ],
        ];

        foreach ($products as $data) {
            Product::updateOrCreate(['slug' => $data['slug']], $data);
        }
    }
}
