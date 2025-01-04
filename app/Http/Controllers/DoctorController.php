<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\ChannelledDoctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Display the available doctors and channelled doctors
    public function index()
    {
        // Fetch all available doctors
        $doctors = Doctor::all();

        // Fetch all channelled doctors for the logged-in user, including doctor details
        $channelledDoctors = ChannelledDoctor::where('user_id', auth()->id())
                                             ->with('doctor') // Include the related doctor details
                                             ->get();

        // Pass both available doctors and channelled doctors to the view
        return view('dashboard', compact('doctors', 'channelledDoctors'));
    }

    // Channel a doctor for the logged-in user
    public function channelDoctor($doctorId)
    {
        $doctor = Doctor::findOrFail($doctorId);

        // Channel the doctor for the logged-in user
        ChannelledDoctor::create([
            'user_id' => auth()->id(),
            'doctor_id' => $doctor->id,
        ]);

        return back(); // Redirect back to the dashboard
    }

    // Remove a channelled doctor
    public function removeChannelledDoctor($doctorId)
    {
        $channelledDoctor = ChannelledDoctor::where('doctor_id', $doctorId)
                                            ->where('user_id', auth()->id())
                                            ->firstOrFail();

        $channelledDoctor->delete(); // Remove the channelled doctor

        return back(); // Redirect back to the dashboard
    }
}
