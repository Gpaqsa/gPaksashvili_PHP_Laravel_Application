<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('quizzes')->insert([
            'name' => "What does FIFA stand for in English?",
            'image' => "https://static.independent.co.uk/s3fs-public/thumbnails/image/2015/05/28/12/fifa.jpg?quality=75&width=1200&auto=webp",
            'status' => "active"
        ],
        ['name' => 'Who is the world’s highest-paid athlete in 2021?', 'image' => 'https://www.gyuanyule.com/png/13170509-forbes-highest-paid-athletes-in-the-world-2021_cover_1500x1000.png',  'status' => "active"],
        ['name' => 'What was the first name of Argentinian soccer star Maradona?', 'image' => 'https://cdn.britannica.com/76/124976-050-E03E50CE/Diego-Maradona-1986.jpg', 'status' => "inactive"],
        ['name' => 'What is a group of crows called?', 'image' => 'https://onecms-res.cloudinary.com/image/upload/s--BxTOjEBO--/c_crop,h_704,w_1252,x_0,y_84/c_fill,g_auto,h_468,w_830/f_auto,q_auto/v1/mediacorp/cna/image/2023/03/01/istock-156325442_0.jpg?itok=iubCCpVK', 'status' => "active"],
    );
    }


}
