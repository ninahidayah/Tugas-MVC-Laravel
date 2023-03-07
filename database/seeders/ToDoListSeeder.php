<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TodoList;

class ToDoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "name" => "Bagun Tidur"
            ],
            [
                "name" => "Sholat"
            ],
            [
                "name" => "Makan"
            ]
        ];

         for($i = 0; $i < count($data); $i++){
            TodoList::create(
                [
                    'name' => $data[$i]['name']
                ]
            );

         }
    }
}
