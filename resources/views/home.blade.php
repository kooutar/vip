@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="bg-gray-800 text-white shadow-lg">
            <div class="container mx-auto px-4 py-4 flex justify-between items-center">
                <a href="{{ url('/') }}" class="text-2xl font-semibold">MyApp</a>
                <div>
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-300 hover:text-white px-3">Dashboard</a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="text-gray-300 hover:text-white px-3">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white px-3">Login</a>
                        <a href="{{ route('register') }}" class="text-gray-300 hover:text-white px-3">Register</a>
                    @endauth
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="flex-grow flex items-center justify-center bg-gray-100">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-800">Bienvenue sur MyApp</h1>
                <p class="mt-4 text-gray-600">Créez votre compte et explorez le contenu !</p>
                <div class="mt-6">
                    @auth
                        <a href="{{ route('dashboard') }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                            Accéder au tableau de bord
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="bg-green-500 text-white py-2 px-4 rounded-lg shadow hover:bg-green-600">
                            Créer un compte
                        </a>
                        <a href="{{ route('login') }}" class="bg-blue-500 text-white py-2 px-4 rounded-lg shadow hover:bg-blue-600">
                            Se connecter
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
