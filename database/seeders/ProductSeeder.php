<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([
            [
                'name'=>'Realme C21',
                'price'=> '13000',
                'description'=> 'A smartphone with 4gb ram, 64 gb rom and much more features',
                'category'=> 'SmartPhone',
                'image'=> 'https://www.kom-dami.com/wp-content/uploads/2021/04/Realme-C21.jpg',
            ],
            [
                'name'=>'Redmi Poko',
                'price'=> '28000',
                'description'=> 'A smartphone with 6gb ram, 128 gb rom and much more features',
                'category'=> 'SmartPhone',
                'image'=> 'https://www.notebookcheck.net/fileadmin/Notebooks/Xiaomi/Poco_M4_Pro_5G/Xiaomi_Poco_M4_Pro_5G_2054.jpg',
            ],
            [
                'name'=>'Narzo Prime 50i',
                'price'=> '12500',
                'description'=> 'A smartphone with 3gb ram, 64 gb rom and much more features',
                'category'=> 'SmartPhone',
                'image'=> 'https://www.mobiledokan.co/wp-content/uploads/2022/05/Realme-C30-Bamboo-Green.jpg',
            ],
            [
                'name'=>'iPhone 15 pro max',
                'price'=> '120000',
                'description'=> 'A smartphone with 16gb ram, 256 gb rom and much more features',
                'category'=> 'SmartPhone',
                'image'=> 'https://www.digitaltrends.com/wp-content/uploads/2023/09/iphone-15-pro-max-review-outside-leaves.jpg?resize=625%2C417&p=1',
            ]
        ]);
    }
}
