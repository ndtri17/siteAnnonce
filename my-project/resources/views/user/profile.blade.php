<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LeBonCoin</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="font-mono bg-white">
    <div class="flex items-center justify-between py-4 px-6">
        <a href={{ route('index') }}>
            <span class=" text-orange-500" style="font-weight: bolder; font-size: 3rem">leboncoin</span>
        </a>
        @auth
            <a href="{{ route('post') }}">
                <button class="bg-orange-500 text-white px-6 py-3 rounded-lg font-bold text-lg">Déposer une annonce</button>
            </a>
        @else
            <a href="{{ route('login') }}">
                <button class="bg-orange-500 text-white px-6 py-3 rounded-lg font-bold text-lg">Déposer une annonce</button>
            </a>
        @endauth
        <div class="flex items-center border border-gray-300 rounded-full px-4 py-2 w-1/2">
            <input type="text" placeholder="Rechercher sur leboncoin"
                class="flex-grow border-none outline-none px-4 rounded-full text-lg">
            <button class="bg-orange-500 rounded-full p-3">
                <span class="material-symbols-outlined text-white">
                    search
                </span>
            </button>
        </div>

        <div class="flex items-center space-x-8">
            <a class="text-center flex flex-col">
                <span class="material-symbols-outlined text-gray-800 cursor-pointer">favorite</span>
                <span class="text-sm text-gray-800 cursor-pointer">Favoris</span>
            </a>

            <a class="text-center flex flex-col">
                <span class="material-symbols-outlined text-gray-800 cursor-pointer">mail</span>
                <span class="text-sm text-gray-800 cursor-pointer">Messages</span>
            </a>


            @auth
                <a class="text-center flex flex-col" href="{{ route('profile') }}">
                    <span class="material-symbols-outlined text-gray-800 cursor-pointer">person</span>
                    <span class="text-sm text-gray-800 cursor-pointer">{{ auth()->user()->username }}</span>
                </a>
            @else
                <a class="text-center flex flex-col" href="{{ route('login') }}">
                    <span class="material-symbols-outlined text-gray-800 cursor-pointer">person</span>
                    <span class="text-sm text-gray-800 cursor-pointer">Se connecter</span>
                </a>
            @endauth

        </div>

    </div>

    <div class="flex items-center justify-between py-4 px-6 border-b border-gray-300 bg-white">
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Immobilier</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Véhicules</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Locations de vacances</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Emploi</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Mode</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Maison & Jardin</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Famille</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Électronique</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Loisirs</a>
        <a href="#" class="mx-4 text-gray-700 hover:text-black">Autres</a>
    </div>

    <div class="container mx-auto mt-10">
        <div class="bg-white p-6 rounded shadow-md">
            <h2 class="text-xl font-bold mb-4">Informations Personnelles</h2>
            @if (session('success'))
                <div class="border px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('update') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Nom d'utilisateur</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
                        id="username" name="username" type="text" placeholder="{{ auth()->user()->username }}">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
                        id="email" name="email" type="email" placeholder="{{ auth()->user()->email }}">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Mot de passe</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"
                        id="password" name="password" type="password" placeholder="********">
                </div>
                <button class="bg-orange-500 text-white font-bold py-2 px-4 rounded" type="submit">Mettre à
                    jour</button>
            </form>
        </div>

        <div class="bg-white p-6 rounded shadow-md mt-6">
            <ul>
                @foreach ($posts as $post)
                    <li class="mb-2">{{$post->title}}
                        <a href="#" class="text-orange-500">Modifier</a> |
                        <a href="#" class="text-red-500">Supprimer</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="bg-orange-500 text-white font-bold py-2 px-4 rounded mt-6">Déconnexion</button>
        </form>

        <form action="{{ route('deleteUser') }}" method="POST">
            @csrf
            <button class="bg-orange-500 text-white font-bold py-2 px-4 rounded mt-6">Supprimer l'utilisateur</button>
        </form>
    </div>

</body>

</html>
