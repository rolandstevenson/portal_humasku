<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Iklan;
use App\Models\Kategori;
use App\Models\Slide;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $category  = Kategori::all();
        $artikel  = Artikel::all();
        $slide  = Slide::all();

        return view('front.home', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide
        ]);
    }

    public function detail($slug)
    {
        $category  = Kategori::all();

        // $slide  = Slide::all();
        $artikel = Artikel::where('slug', $slug)->first();

        // $bannerA = Iklan::where('id', '1')->first();
        $iklanA = Iklan::where('id', '1')->first();

        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit('5')->get();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'category' => $category,
            // 'slide' => $slide,
            'iklanA' => $iklanA,
            'postinganTerbaru' => $postinganTerbaru
        ]);
    }
}
