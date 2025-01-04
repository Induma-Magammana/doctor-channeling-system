<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h3 class="mb-4 font-semibold text-lg text-gray-700">Welcome Back!</h3>
            <!-- Available Doctors Section -->
            <h3 class="mb-4 font-semibold text-lg text-gray-700">Available Doctors</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($doctors as $doctor)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="font-bold text-lg mb-2">{{ $doctor->name }}</h5>
                            <p class="text-gray-700 mb-4">{{ $doctor->specialty }}</p>
                            <form action="{{ route('channelDoctor', $doctor->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                                    Channel Doctor
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-gray-500">No doctors available at the moment.</p>
                @endforelse
            </div>

            <!-- Channelled Doctors Section -->
            <h3 class="mt-10 mb-4 font-semibold text-lg text-gray-700">Your Channelled Doctors</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($channelledDoctors as $channelledDoctor)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h5 class="font-bold text-lg mb-2">{{ $channelledDoctor->doctor->name }}</h5>
                            <p class="text-gray-700 mb-4">{{ $channelledDoctor->doctor->specialty }}</p>
                            <form action="{{ route('removeChannelledDoctor', $channelledDoctor->doctor->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="w-full bg-red-500 text-white py-2 px-4 rounded hover:bg-red-600">
                                    Remove Channel
                                </button>
                            </form>
                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-gray-500">You have not channelled any doctors yet.</p>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
