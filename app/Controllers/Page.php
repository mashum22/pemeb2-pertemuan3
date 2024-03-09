<?php namespace App\Controllers;
       
       
class Page extends BaseController
{
    public function about()
    {
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "Faqs page";
    }
    public function tos()
    {
        echo "Halaman Term of service";
    }
    public function biodata()
    {
        echo "Nama : Muhammad Ma'shum <br> Alamat : Banjardowo <br> Ttl : Jombang, 04 oktober 2002 : Jombang";
    }
}