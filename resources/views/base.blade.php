
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-pink-50 to-purple-50">
<!-- Navigation -->
<nav class="bg-white shadow-md">
    <div class="container mx-auto px-6 py-3">
        <div class="flex justify-between items-center">
            <div class="text-2xl font-bold text-pink-600">MonSite</div>
            <div class="hidden md:flex items-center space-x-8">
                <a href="#" class="text-purple-700 hover:text-pink-500">Accueil</a>
                <a href="#" class="text-purple-700 hover:text-pink-500">Services</a>
                <a href="#" class="text-purple-700 hover:text-pink-500">À propos</a>
                <a href="#" class="text-purple-700 hover:text-pink-500">Contact</a>
            </div>
            <div class="flex items-center space-x-4">
{{--                <a href="{{url('/connection')}}" class="text-pink-600 hover:text-pink-500">Connexion</a>--}}
{{--                <a href="{{url('/registre')}}" class="bg-gradient-to-r from-pink-500 to-purple-500 text-white px-4 py-2 rounded-md hover:from-pink-600 hover:to-purple-600">--}}
{{--                    S'inscrire--}}
{{--                </a>--}}
                @if (Route::has('login'))
                    <div class="  p-6 text-right">
                        @auth
                            <div class="flex gap-4">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="text-pink-600 hover:text-pink-500">Déconnexion</button>
                            </form>
                            <a href="{{ url('/dashboard') }}" class="bg-gradient-to-r from-pink-500 to-purple-500 text-white px-4 py-2 rounded-md hover:from-pink-600 hover:to-purple-600">profil</a>
                    </div>
                        @else
                            <a href="{{ route('login') }}" class="text-pink-600 hover:text-pink-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="bg-gradient-to-r from-pink-500 to-purple-500 text-white px-4 py-2 rounded-md hover:from-pink-600 hover:to-purple-600">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
</body>
</html>
