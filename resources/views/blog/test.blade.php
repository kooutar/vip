@extends('base')
@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Cover Photo -->
            <div class="h-48 bg-gradient-to-r from-pink-300 to-purple-300 relative">
                <button class="absolute bottom-2 right-2 bg-white p-2 rounded-full shadow-lg hover:bg-gray-100">
                    <i class="fas fa-camera text-purple-600"></i>
                </button>
            </div>

            <!-- Profile Info -->
            <div class="relative px-6 py-8">
                <!-- Profile Picture -->
                <div class="relative -mt-24 mb-4">
                    <div class="w-32 h-32 mx-auto relative">
                        <img src=" {{ asset('images/author-image3.jpg') }}" alt="Photo de profil"
                             class="w-full h-full rounded-full border-4 border-white shadow-lg object-cover">
                        <button class="absolute bottom-0 right-0 bg-pink-500 p-2 rounded-full shadow-lg hover:bg-pink-600 text-white">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                </div>

                <!-- Name and Bio -->
                <div class="text-center mb-6">
                    <div class="flex justify-center items-center mb-2">
                        <h1 class="text-2xl font-bold text-purple-800">Marie Dupont</h1>
                        <button class="ml-2 text-pink-500 hover:text-pink-600">
                            <i class="fas fa-edit"></i>
                        </button>
                    </div>
                    <p class="text-gray-600">@marie.dupont</p>
                </div>

                <!-- Bio Section -->
                <div class="bg-pink-50 p-4 rounded-lg mb-6 relative">
                    <button class="absolute top-2 right-2 text-pink-500 hover:text-pink-600">
                        <i class="fas fa-edit"></i>
                    </button>
                    <h2 class="text-lg font-semibold text-purple-700 mb-2">Bio</h2>
                    <p class="text-gray-600">
                        Passionnée de design et de développement web. J'aime créer des expériences utilisateur uniques et mémorables.
                    </p>
                </div>

                <!-- Additional Info -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="bg-purple-50 p-4 rounded-lg relative">
                        <button class="absolute top-2 right-2 text-purple-500 hover:text-purple-600">
                            <i class="fas fa-edit"></i>
                        </button>
                        <h3 class="font-semibold text-purple-700 mb-2">Informations de contact</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li><i class="fas fa-envelope mr-2"></i>marie.dupont@email.com</li>
                            <li><i class="fas fa-phone mr-2"></i>+33 6 12 34 56 78</li>
                            <li><i class="fas fa-map-marker-alt mr-2"></i>Paris, France</li>
                        </ul>
                    </div>

                    <div class="bg-pink-50 p-4 rounded-lg relative">
                        <button class="absolute top-2 right-2 text-pink-500 hover:text-pink-600">
                            <i class="fas fa-edit"></i>
                        </button>
                        <h3 class="font-semibold text-purple-700 mb-2">Réseaux sociaux</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li><i class="fab fa-twitter mr-2"></i>@mariedupont</li>
                            <li><i class="fab fa-linkedin mr-2"></i>marie-dupont</li>
                            <li><i class="fab fa-instagram mr-2"></i>@marie.creative</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
