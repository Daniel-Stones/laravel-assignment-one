<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Friday (final 3 for each stage)
        DB::table('bands')->insert(['name' => 'Black Stone Cherry', 'startTime' => '17:30', 'endTime' => '18:30', 'date' => '2024-06-14', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'Royal Blood', 'startTime' => '19:00', 'endTime' => '20:10', 'date' => '2024-06-14', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'Queens of the Stone Age', 'startTime' => '21:10', 'endTime' => '22:50', 'date' => '2024-06-14', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'Soft Play', 'startTime' => '17:15', 'endTime' => '17:55', 'date' => '2024-06-14', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Mr. Bungle', 'startTime' => '18:30', 'endTime' => '19:15', 'date' => '2024-06-14', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Heilung', 'startTime' => '20:00', 'endTime' => '21:00', 'date' => '2024-06-14', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Vukovi', 'startTime' => '17:15', 'endTime' => '17:45', 'date' => '2024-06-14', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'Wheatus', 'startTime' => '19:20', 'endTime' => '20:00', 'date' => '2024-06-14', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'Busted', 'startTime' => '20:30', 'endTime' => '21:30', 'date' => '2024-06-14', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'The Callous Daoboys', 'startTime' => '15:30', 'endTime' => '15:55', 'date' => '2024-06-14', 'stage' => 'Dogtooth']);
        DB::table('bands')->insert(['name' => 'Make Them Suffer', 'startTime' => '20:00', 'endTime' => '20:25', 'date' => '2024-06-14', 'stage' => 'Dogtooth']);
        DB::table('bands')->insert(['name' => 'Biohazard', 'startTime' => '21:45', 'endTime' => '22:30', 'date' => '2024-06-14', 'stage' => 'Dogtooth']);
    
        // Saturday (final 3 for each stage)
        DB::table('bands')->insert(['name' => 'Fall Out Boy', 'startTime' => '21:00', 'endTime' => '22:50', 'date' => '2024-06-15', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'The Offspring', 'startTime' => '18:40', 'endTime' => '19:55', 'date' => '2024-06-15', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'Enter Shikari', 'startTime' => '17:05', 'endTime' => '18:05', 'date' => '2024-06-15', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'Bring Me The Horizon', 'startTime' => '21:00', 'endTime' => '22:30', 'date' => '2024-06-15', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Bad Omens', 'startTime' => '19:00', 'endTime' => '20:15', 'date' => '2024-06-15', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Beartooth', 'startTime' => '17:30', 'endTime' => '18:15', 'date' => '2024-06-15', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Neck Deep', 'startTime' => '20:30', 'endTime' => '21:30', 'date' => '2024-06-15', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'The Story So Far', 'startTime' => '19:10', 'endTime' => '20:00', 'date' => '2024-06-15', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'Boston Manor', 'startTime' => '17:20', 'endTime' => '18:00', 'date' => '2024-06-15', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'Malevolence', 'startTime' => '21:45', 'endTime' => '22:30', 'date' => '2024-06-15', 'stage' => 'Dogtooth']);
        DB::table('bands')->insert(['name' => 'Sleep Token', 'startTime' => '20:50', 'endTime' => '21:20', 'date' => '2024-06-15', 'stage' => 'Dogtooth']);
        DB::table('bands')->insert(['name' => 'Loathe', 'startTime' => '20:00', 'endTime' => '20:25', 'date' => '2024-06-15', 'stage' => 'Dogtooth']);
    
        // Sunday (final 3 for each stage)
        DB::table('bands')->insert(['name' => 'Avenged Sevenfold', 'startTime' => '21:00', 'endTime' => '22:50', 'date' => '2024-06-16', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'Limp Bizkit', 'startTime' => '19:00', 'endTime' => '20:00', 'date' => '2024-06-16', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'Sum 41', 'startTime' => '17:00', 'endTime' => '18:00', 'date' => '2024-06-16', 'stage' => 'Apex']);
        DB::table('bands')->insert(['name' => 'Architects', 'startTime' => '21:00', 'endTime' => '22:30', 'date' => '2024-06-16', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Meshuggah', 'startTime' => '19:00', 'endTime' => '20:15', 'date' => '2024-06-16', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Code Orange', 'startTime' => '17:30', 'endTime' => '18:15', 'date' => '2024-06-16', 'stage' => 'Opus']);
        DB::table('bands')->insert(['name' => 'Billy Talent', 'startTime' => '20:30', 'endTime' => '21:30', 'date' => '2024-06-16', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'Holding Absence', 'startTime' => '19:10', 'endTime' => '20:00', 'date' => '2024-06-16', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'Silverstein', 'startTime' => '17:20', 'endTime' => '18:00', 'date' => '2024-06-16', 'stage' => 'Avalanche']);
        DB::table('bands')->insert(['name' => 'Biohazard', 'startTime' => '21:45', 'endTime' => '22:30', 'date' => '2024-06-16', 'stage' => 'Dogtooth']);
        DB::table('bands')->insert(['name' => 'Health', 'startTime' => '20:50', 'endTime' => '21:20', 'date' => '2024-06-16', 'stage' => 'Dogtooth']);
        DB::table('bands')->insert(['name' => 'Make Them Suffer', 'startTime' => '20:00', 'endTime' => '20:25', 'date' => '2024-06-16', 'stage' => 'Dogtooth']); 
    }
}
