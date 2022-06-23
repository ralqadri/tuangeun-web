<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Restaurant::create([
            "name_resto" => "Baby Dutch Pancake",
            "category"=> "Restaurant",
            "alamat_resto" => 'Jl. Gunung Kareumbi No.10, Ciumbuleuit, Kec. Cidadap, Kota Bandung, Jawa Barat 40142',
            "desc_resto" => "Baby Dutch Pancake merupakan sebuah anak resto dari Nanny Pavilion. Resto ini menyediakan menu pancake dengan rasa dan kombinasi topping yang dapat menggugah selera penikmatnya.",
            "latitude" => -6.869404,
            "longitude" => 107.6088106,
            "imageLink" => "https=>//lh5.googleusercontent.com/p/AF1QipO85DCNyA0uii50dkBQ1rm9X4lJn9dU1uvcWVQT=w408-h305-k-no",
            "googleMapsLink"=> "https://www.google.com/maps/place/Baby+Dutch+Pancake/@-6.869404,107.6088106,15z/data=!4m5!3m4!1s0x0:0xa22b9512a609b3da!8m2!3d-6.8694055!4d107.6088099?hl=id"
        ]);
        Restaurant::create([
            "name_resto" => "Limarasa",
            "category" => "Cafe",
            "alamat_resto" => 'Jl. Braga No.36, Braga, Kec. Sumur Bandung, Kota Bandung, Jawa Barat 40111',
            "desc_resto" => "Limarasa merupakan sebuah cafe yang berlokasi di Jalan Braga. Lokasinya yang strategis dengan nuansa cafe yang Instagrm-able, membuat Cafe ini menarik begitu banyak pelanggan setiap harinya.",
            "latitude" => -6.9183813,
            "longitude" => 107.6097345,
            "imageLink" => "https://lh5.googleusercontent.com/p/AF1QipOqRZ09uy6rzh52_DesQ8511i88ykwNWEE9xCud=w408-h725-k-no",
            "googleMapsLink" => "https://www.google.com/maps/place/Warung+Kopi+Limarasa/@-6.9183813,107.6097345,15z/data=!4m5!3m4!1s0x0:0xa6b85f42bfbf93f5!8m2!3d-6.9183813!4d107.6097345?hl=id"
        ]);
        Restaurant::create([
            "name_resto" => "Mie Gacoan",
            "category" => "Restaurant",
            "alamat_resto" => 'Jl. Gatot Subroto No.149',
            "desc_resto" => "Mie Gacoan sudah terkenal dengan makanan dan harganya yang sangat ramah kantong di kalangan muda-mudi kita. Mie Gacoan Bandung ini menjadi salah satu cabang Mie Gacoan yang memiliki nuansa resto yang Aesthetic.",
            "latitude" => -6.8661782,
            "longitude" => 107.5935448,
            "imageLink" => "https://lh5.googleusercontent.com/p/AF1QipNp6ilX-jaq3u0zCX3wcM0e1mBu4g3hNlZUehoA=w408-h272-k-no",
            "googleMapsLink" => "https://www.google.com/maps/place/Mie+Gacoan/@-6.8661782,107.5935448,15z/data=!4m5!3m4!1s0x0:0xc4288bd98ca9f9de!8m2!3d-6.8661782!4d107.5935448?hl=id"
        ]);
        Restaurant::create([
            "name_resto" => "Mangkok Manis",
            "category" => "Dessert Cafe",
            "alamat_resto" => 'Jl. Cihampelas No.95, Cipaganti, Kecamatan Coblong, Kota Bandung, Jawa Barat 40131',
            "desc_resto" => "Restoran simpel yang menyajikan makanan penutup beku dengan berbagai topping, sayap ayam & kentang goreng.",
            "latitude" => -6.8989117,
            "longitude" => 107.6037978,
            "imageLink" => "https://lh5.googleusercontent.com/p/AF1QipM804yqMiL5cenNDALDkCmAhIRKOf2sXZzGnCxl=w408-h265-k-no",
            "googleMapsLink" => "https://www.google.com/maps/place/Mangkok+Manis/@-6.8989117,107.6037978,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xbf82693e8ab25b50!8m2!3d-6.8989117!4d107.6037978?hl=id"
        ]);
        Restaurant::create([
            "name_resto" => "Iga Bakar Si Jangkung",
            "category" => "Restaurant",
            "alamat_resto" => 'Jl. Cipaganti No.75G, Pasteur, Kec. Sukajadi, Kota Bandung, Jawa Barat 40161',
            "desc_resto" => "Salah satu tempat kuliner favorit di Bandung yang selalu ramai pengunjung saat pekan liburan. Semua menu yang ada sangat direkomendasikan, terutama Iga Bakar dan Es Campurnya.\r\n",
            "latitude" => -6.8950959,
            "longitude" => 107.6022172,
            "imageLink" => "https://lh5.googleusercontent.com/p/AF1QipMmxLu3mX2QCJoT9F0np6TCQqBfGLQojSgvnjgp=w408-h306-k-no",
            "googleMapsLink" => "https://www.google.com/maps/place/Iga+Bakar+Si+Jangkung/@-6.8950959,107.6022172,15z/data=!4m5!3m4!1s0x0:0xeb50bf4f4b574b1b!8m2!3d-6.8950959!4d107.6022172?hl=id"
        ]);
        Restaurant::create([
            "name_resto" => "Chingu Cafe",
            "category" => "Restaurant",
            'alamat_resto' => 'Jl. Buah Batu No.218',
            "desc_resto" => "Restoran Korea yang keren dengan hidangan kelas atas & ruang makan individu bernuansa K-pop.",
            "latitude" => -6.9011691,
            "longitude" => 107.6101206,
            "imageLink" => "https://lh5.googleusercontent.com/proxy/U_nIwin3Rm731vY_u0rEdZhrMUxuujnj87gA2rul_MWvIWosQB40WUHHg6U0Je3cnyUOap40QLJLgM88iw7NVjpdI7w2q3DPTgoOhq_W0lHmL8Etqq-0KqKYBgGnFxV4wcv3jjqhjY7AkBiBy-RE_gBwNiFeL14=w408-h272-k-no",
            "googleMapsLink" => "https://www.google.com/maps/place/Chingu+Cafe/@-6.9011691,107.6101206,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e64f5f95558d:0xb05a0d4add81a40b!8m2!3d-6.9011691!4d107.6101206?hl=id"
        ]);
        \App\Models\Restaurant::factory()->count(20)->create();
        \App\Models\RestoImgData::factory()->count(15)->create();
        \App\Models\User::factory()->count(15)->create();

    }
}
