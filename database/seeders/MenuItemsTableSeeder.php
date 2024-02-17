<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        $menuItems = [
            [
                'name' => 'Grilled Salmon',
                'description' => 'Grilled salmon with a lemon herb butter sauce.',
                'image' => 'menu.jpg',
                'category' => 'popular',
                'price' => 19.99,
            ],
            [
                'name' => 'Classic Burger',
                'description' => 'Beef patty, lettuce, tomato, onion, and our special sauce.',
                'image' => 'menu.jpg',
                'category' => 'lunch',
                'price' => 9.99,
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Crisp romaine lettuce, parmesan cheese, croutons, and Caesar dressing.',
                'image' => 'menu.jpg',
                'category' => 'special',
                'price' => 7.99,
            ],
            [
                'name' => 'Pancakes',
                'description' => 'Fluffy pancakes served with maple syrup and butter.',
                'image' => 'menu.jpg',
                'category' => 'breakfast',
                'price' => 5.99,
            ],
            [
                'name' => 'Steak',
                'description' => 'Grilled to perfection with a side of mashed potatoes.',
                'image' => 'menu.jpg',
                'category' => 'dinner',
                'price' => 25.99,
            ],
        ];

        while (count($menuItems) < 20) {
            foreach ($menuItems as $item) {
                if (count($menuItems) >= 20) break;
                $newItem = $item;
                $newItem['name'] .= " " . strval(count($menuItems) + 1);
                $menuItems[] = $newItem;
            }
        }

        foreach ($menuItems as $item) {
            \App\Models\MenuItem::create($item);
        }
    }

}
