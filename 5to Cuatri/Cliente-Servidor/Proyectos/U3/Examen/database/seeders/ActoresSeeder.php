<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $act = array(
            array('name' => 'Tom Cruise', 'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Tom_Cruise_by_Gage_Skidmore_2.jpg/300px-Tom_Cruise_by_Gage_Skidmore_2.jpg'),
            array('name' => 'Nicole Kidman', 'picture' => 'https://www.goldenglobes.com/sites/default/files/2021-12/nicole-kidman-nom-pro-gettyimages-1356865807.jpg?format=pjpg&auto=webp&optimize=high&width=850'),
            array('name' => 'Sydney Pollack', 'picture' => 'https://images.mubicdn.net/images/cast_member/3622/cache-215604-1492043044/image-w856.jpg?size=800x'),
            array('name' => 'Marie Richardson', 'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Marie_Richardson.jpg/1200px-Marie_Richardson.jpg'),
            array('name' => 'Todd Field', 'picture' => 'https://cps-static.rovicorp.com/2/Open/Getty/Todd%20Field/_derived_jpg_q90_310x470_m0/73422286.jpg'),
            array('name' => 'Sky du Mont', 'picture' => 'https://upload.wikimedia.org/wikipedia/commons/b/ba/1642_Sky_du_Mont.JPG'),
            array('name' => 'Rade Šerbedžija', 'picture' => 'http://prolog.rs/upload/article/12928_Rade%20%C5%A0erbed%C5%BEija.jpg'),
            array('name' => 'Vinessa Shaw', 'picture' => 'https://upload.wikimedia.org/wikipedia/commons/5/5d/Vinessa_Shaw_2013.png'),
            array('name' => 'Fay Masterson', 'picture' => 'https://images.mubicdn.net/images/cast_member/136578/cache-138948-1463178189/image-w856.jpg'),
            array('name' => 'Leelee Sobieski', 'picture' => 'https://static1.lasprovincias.es/www/multimedia/202012/04/media/estrellas-infantiles/11-Leelee-Sobieski-ahora-afp.jpg'),
            array('name' => 'Alan Cumming', 'picture' => 'https://upload.wikimedia.org/wikipedia/commons/5/56/AlanCummingSept2013TIFF.jpg'),
            array('name' => 'Leon Vitali', 'picture' => 'https://www.thefamouspeople.com/profiles/images/leon-vitali-5.jpg'),
            array('name' => 'Julienne Davis', 'picture' => 'https://resizing.flixster.com/2D3aljjNfEt9p6tpVRILARtYY4w=/218x280/v2/https://flxt.tmsimg.com/assets/273910_v9_ba.jpg'),
            array('name' => 'Thomas Gibson', 'picture' => 'https://kmesh.io/img/biography/23/thomas-gibson-biography.jpg'),
            array('name' => 'Madison Eginton', 'picture' => 'https://www.cine.com/media/actores/1/16206/16206_500.jpg'),
            array('name' => 'Stewart Thorndike', 'picture' => 'https://vpa.syr.edu/wp-content/uploads/thorndike-stewart.jpg')
        );

        foreach ($act as $value){
            DB::table('actores')->insert([
                'Nombre' => $value['name'],
                'Foto' => $value['picture']
            ]);
        }
    }
}
