<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        
        if($services->isEmpty()) {
            $services = collect([
                (object)[
                    'name' => 'Signature Hair Cut',
                    'description' => 'Potongan rambut presisi oleh penata rambut ahli kami untuk menonjolkan fitur terbaik Anda.',
                    'price' => 250000,
                    'image_url' => 'https://images.unsplash.com/photo-1562322140-8baeececf3df?auto=format&fit=crop&w=600&q=80',
                    'category' => 'Hair'
                ],
                (object)[
                    'name' => 'Luxury Balayage',
                    'description' => 'Teknik pewarnaan rambut yang memberikan efek gradasi natural dan dimensi yang memukau.',
                    'price' => 850000,
                    'image_url' => 'https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&fit=crop&w=600&q=80',
                    'category' => 'Color'
                ],
                (object)[
                    'name' => 'Glow Facial Treatment',
                    'description' => 'Perawatan wajah mendalam untuk membersihkan pori-pori dan memberikan kilau alami.',
                    'price' => 450000,
                    'image_url' => 'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=600&q=80',
                    'category' => 'Face'
                ],
            ]);
        }

        return view('home', compact('services'));
    }
}