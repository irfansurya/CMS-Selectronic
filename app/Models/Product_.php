<?php

namespace App\Models;

class Product
{
    private static $cat_products = [
        [
            "title" => "Kipas Angin Super",
            "slug" => "kipas-angin-super",
            "price" => "5.000.000",
            "body" => "ini adalah sebuah kipas angin super dengan kekuatan 10 tangan. 
            Dengan berbagai pilihan warna sehingga mata kita juga akan dimanjakan jika melihat kipas ini.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit sed vel dolore nobis commodi aut a libero quam in unde illo, 
            incidunt, quas ut esse? Enim repudiandae autem molestiae vitae aliquam temporibus eum quas veritatis quos, blanditiis recusandae sapiente hic rerum non architecto libero ab fugit neque quaerat. 
            Nisi placeat unde harum mollitia cumque amet reprehenderit quidem quasi voluptate!"
        ],
        [
            "title" => "Televisi Super Jernih",
            "slug" => "televisi-super-jernih",
            "price" => "6.000.000",
            "body" => "ini adalah sebuah televisi super jernih dengan memiliki banyak chanel siaran.
            Dengan berbagai pilihan warna sehingga mata kita juga akan dimanjakan jika melihat televisi ini.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur sit sed vel dolore nobis commodi aut a libero quam in unde illo, 
            incidunt, quas ut esse? Enim repudiandae autem molestiae vitae aliquam temporibus eum quas veritatis quos, blanditiis recusandae sapiente hic rerum non architecto libero ab fugit neque quaerat. 
            Nisi placeat unde harum mollitia cumque amet reprehenderit quidem quasi voluptate!"
        ],
    ];


    public static function all()
    {
        return collect(self::$cat_products);
    }

    public static function find($slug)
    {
        $products = static::all();
        return $products->firstWhere('slug', $slug);
    }
}
