<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'Proyecto pelotas',
                'text' =>'El espacio, la ultima frontera',
                'image_path' =>'1591394197-Botones.jpg',
                'user_id' => 1,
                'category_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'PHPito',
                'text' =>'Un elefante morado de PHP, i miss you',
                'image_path' =>'1591394291-logo_php-600x600.png',
                'user_id' => 1,
                'category_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Logo CSS',
                'text' =>'No hay mucho que decir, solo que es el logo del CSS3',
                'image_path' =>'1591436882-logo-css3-png-4.png',
                'user_id' => 2,
                'category_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                "title" => "Proyecto DietMe",
                "text"=> "Proyecto HTML, CSS, Bootstrap, Javascript",
                "image_path"=> "1591441922-Sin título-1.jpg",
                'user_id' => 3,
                "category_id" => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Logo de REDUX',
                'text' =>'Quien no quiere tener el logo de redux',
                'image_path' =>'1591467080-5848309bcef1014c0b5e4a9a.png',
                'user_id' => 2,
                'category_id' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1591523519-600_154269522.jpeg',
                'user_id' => 3,
                'category_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1591526089-Cabecera.jpg',
                'user_id' => 3,
                'category_id' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1591527405-IMG_20200117_130307.jpg',
                'user_id' => 4,
                'category_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1591529700-IMG_20200213_165729.jpg',
                'user_id' => 4,
                'category_id' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1591547819-Pagina Contacto.jpg',
                'user_id' => 1,
                'category_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1591564813-Pagina Proyectos.jpg',
                'user_id' => 1,
                'category_id' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1591985282-cofigo barra navegacion.jpg',
                'user_id' => 1,
                'category_id' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592005284-Voluntario.jpg',
                'user_id' => 1,
                'category_id' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592040011-Barra de navegacion.jpg',
                'user_id' => 1,
                'category_id' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'BaseDatosLinkedin.jpg',
                'user_id' => 1,
                'category_id' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Soy un titulo',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'IMG_20200213_173711.jpg',
                'user_id' => 1,
                'category_id' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'JFK',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'jfk.jpg',
                'user_id' => 1,
                'category_id' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Roller Derbi',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'Roller.jpeg',
                'user_id' => 1,
                'category_id' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'GIF Japon',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'6XxLQkY.gif',
                'user_id' => 1,
                'category_id' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Apuntes sequelize',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'WhatsApp Image 2020-03-18 at 21.38.11.jpeg',
                'user_id' => 1,
                'category_id' => 29,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Wonder Woman retrato',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592043450-captain-marvel-movie-comics-art-4K-31.jpg',
                'user_id' => 1,
                'category_id' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Jardin de las Delicias (El Bosco)',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592043517-El_jardín_de_las_Delicias,_de_El_Bosco.jpg',
                'user_id' => 1,
                'category_id' => 31,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Hilda',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592043576-hilda.jpg',
                'user_id' => 1,
                'category_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Pikachu. Pokemon',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592043620-pikaaaaa-chuuuuuuuu.gif',
                'user_id' => 1,
                'category_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Europa. Espacio',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592043666-Sci-Europa-RTS1RFWK.jpg',
                'user_id' => 1,
                'category_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Hilda',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592043576-hilda.jpg',
                'user_id' => 1,
                'category_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Pikachu. Pokemon',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592043620-pikaaaaa-chuuuuuuuu.gif',
                'user_id' => 1,
                'category_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Europa. Espacio',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592043666-Sci-Europa-RTS1RFWK.jpg',
                'user_id' => 1,
                'category_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Gato Molon con Gafas',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592079361-gatomolon.jpg',
                'user_id' => 1,
                'category_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'The Revenant (Leonardo Di Caprio)',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592079665-The-Revenant-Leonardo-DiCaprio.jpg',
                'user_id' => 1,
                'category_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Lindsey Stirling',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592127130-lindseystirling.jpg',
                'user_id' => 1,
                'category_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Natalie Postman (Leon, el profesional)',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592128015-the-professional-3.jpg',
                'user_id' => 1,
                'category_id' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'K-On gif',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592161018-source.gif',
                'user_id' => 1,
                'category_id' => 33,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Wonder Woman comic',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592161208-razones-por-leer-la-vida-de-captain-marvel5.jpg',
                'user_id' => 1,
                'category_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'title' => 'Arroz png',
                'text' =>'Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet nascetur massa, ad condimentum auctor dis nec praesent nibh curae netus.',
                'image_path' =>'1592162585-5bbc96d30bc67a02c98d958e.png',
                'user_id' => 1,
                'category_id' => 34,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
