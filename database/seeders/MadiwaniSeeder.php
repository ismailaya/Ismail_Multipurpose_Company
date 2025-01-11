<?php

namespace Database\Seeders;

use App\Models\Madiwani;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class MadiwaniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $records = [
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Mahmoud Muhammed Mussa', 'phone' => '0777414099', 'role' => 'Meya wa jiji la Zanzibar','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Khaitham Muhidin Khamis', 'phone' => '0777487127', 'role' => 'Naibu meya wa jiji la Zanzibar','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Ali Haji Haji', 'phone' => '0773906917', 'role' => 'Mst meya wa Manispaa ya Mjini','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Khamis Hassan Haji', 'phone' => '0777438915', 'role' => 'Mst meya wa Manispaa ya Magharibi “B”','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Chum Shuwari Machano', 'phone' => '0777901931', 'role' => 'Mst meya wa Manispaa ya Magharin “A”','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Rahma Ali Khamis', 'phone' => '0777427750', 'role' => 'Naibu Mwenyekiti wa Kamati ya Fedha na Uongozi','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Janeth Norah', 'phone' => '0777415144', 'role' => 'Mwenyekiti wa kamati ya sheri na utawala','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Aboud Hassan Serenge', 'phone' => '0717556740', 'role' => 'Mwenyeketi wa kamati ya mipango miji Baraza la jiji la Zanzibar','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Abdul-Latif Omar Haji', 'phone' => '0777479279', 'role' => 'Mwenyeketi wa kamati ya mipango miji Baraza la jiji la Zanzibar','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Sharifa Mohammed Kuoko', 'phone' => '0773663987', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Jacob Joseph Oware', 'phone' => '0779233023', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Shaaban Mwinyi Ali', 'phone' => '0776818898', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Asha Hassan Juma', 'phone' => '0773690276', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Saleh Yahya Saleh', 'phone' => '0777661824', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Sehera Hassan Sehera', 'phone' => '0776115810', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Mussa Ali Issa', 'phone' => '0776454443', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Maryam Saleh Ali', 'phone' => '0777477461', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Mohammed Abdulla Makame', 'phone' => '0777656666', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Asha Khamis Juma', 'phone' => '0623717483', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Omar Mwalim Juma', 'phone' => '0777472075', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Juma Fikirini Khamis', 'phone' => '0714193878', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
            ['ID' => Str::uuid(),'created_by'=>1,'name' => 'Dk Abdulla Ismail Kanduru', 'phone' => '0777423591', 'role' => 'Diwani','created_at'=>now(),'updated_at'=>now()],
        ];
        ;

        // Bulk insert the records
        Madiwani::insert($records);
    }
}
