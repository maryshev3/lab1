<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($message = "", $phone_num = "")
    {
        $urls = ["about_url" => "./about", "contact_url" => "./contact"];

        return view('home',
            [
                "about_url" => $urls["about_url"],
                "contact_url" => $urls["contact_url"],
                "message" => $message,
                "phone_num" => $phone_num
            ]
        );
    }

    public function index_message(Request $request)
    {
        return $this->index(
            mb_substr($request->post("message"), 0, 160),
            preg_replace('~\D~', '', $request->post("phone_num"))
        );
    }

    public function about()
    {
        $about_info = "Данный магазин является самым успешным. Его создал студент-программист за 10 минут";

        return view('about',
            [
                "about_info" => $about_info
            ]
        ); 
    }

    public function contact()
    {
        return view('contact');
    }
}
