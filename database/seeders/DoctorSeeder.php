<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        Doctor::create([
            'name' => 'Dr. John Doe',
            'specialty' => 'Cardiologist',
            'phone' => '123-456-7890',
            'email' => 'john@example.com',
            'bio' => 'Experienced Cardiologist with over 10 years of practice.',
            'profile_picture' => 'doctors/johndoe.jpg',
        ]);

        Doctor::create([
            'name' => 'Dr. Jane Smith',
            'specialty' => 'Dermatologist',
            'phone' => '987-654-3210',
            'email' => 'jane@example.com',
            'bio' => 'Skilled Dermatologist specializing in skin treatments.',
            'profile_picture' => 'doctors/janesmith.jpg',
        ]);

        // Add more doctors as needed...
    }
}

