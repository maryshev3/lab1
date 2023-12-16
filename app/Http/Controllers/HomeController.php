<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index($message = "", $phone_num = "")
    {
        $urls = [
            "about_url" => "./about",
            "contact_url" => "./contact",
            "products_url" => "./products",
            "create_product_url" => "./create_product"
        ];

        return view('home',
            [
                "about_url" => $urls["about_url"],
                "contact_url" => $urls["contact_url"],
                "products_url" => $urls["products_url"],
                "create_product_url" => $urls["create_product_url"],
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
