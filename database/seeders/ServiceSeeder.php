<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        // Bersihkan data lama agar tidak menumpuk
        Service::truncate();

        $services = [
            [
                'name' => 'Signature Hair Cut & Styling',
                'description' => 'Konsultasi gaya rambut, pemotongan presisi tinggi, dilanjutkan dengan cuci rambut relaksasi dan blow dry khas Lumière.',
                'price' => 350000,
                'image_url' => 'https://images.unsplash.com/photo-1562322140-8baeececf3df?auto=format&fit=crop&w=600&q=80',
                'category' => 'Hair'
            ],
            [
                'name' => 'Luxury Balayage & Color',
                'description' => 'Teknik pewarnaan gradasi halus untuk menciptakan dimensi warna rambut yang alami, berkilau, dan tahan lama.',
                'price' => 950000,
                'image_url' => 'https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&fit=crop&w=600&q=80',
                'category' => 'Color'
            ],
            [
                'name' => 'Glow Hydra-Facial',
                'description' => 'Perawatan wajah intensif untuk eksfoliasi sel kulit mati, pembersihan pori mendalam, dan hidrasi serum anti-oksidan.',
                'price' => 550000,
                'image_url' => 'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=600&q=80',
                'category' => 'Face'
            ],
            [
                'name' => 'Gel Manicure Aesthetics',
                'description' => 'Perawatan kuku lengkap meliputi pembersihan kutikula, pengerikan bentuk kuku, dan pewarnaan kuku gel bermerek premium.',
                'price' => 280000,
                'image_url' => 'https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=600&q=80',
                'category' => 'Nails'
            ],
            [
                'name' => 'Eyelash Extension Volume',
                'description' => 'Pemasangan bulu mata helai demi helai dengan bahan sutra ultra-ringan untuk tampilan mata yang tegas dan menawan.',
                'price' => 450000,
                'image_url' => 'https://images.unsplash.com/photo-1583001809873-a1284a544758?auto=format&fit=crop&w=600&q=80',
                'category' => 'Lash'
            ],
            [
                'name' => 'Aromatherapy Body Spa',
                'description' => 'Pijat relaksasi seluruh tubuh menggunakan minyak esensial murni untuk melancarkan sirkulasi dan melepas stres.',
                'price' => 600000,
                'image_url' => 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&w=600&q=80',
                'category' => 'Spa'
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}