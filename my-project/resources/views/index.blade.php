<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href= "/home/tri/personal_projects/siteAnnonce/site_annonce/public/assets/css/index.css">
    <title>LeBonCoin</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
        @auth
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
        @else 
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Immobilier</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Véhicules</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Locations de vacances</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Emploi</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Mode</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Maison & Jardin</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Famille</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Électronique</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Loisirs</a>
        <a href="{{ route('login') }}" class="mx-4 text-gray-700 hover:text-black">Autres</a>
        @endauth
    </div>

    <div class="flex flex-row items-center justify-center bg-orange-100 font-bold text-lg gap-8 p-6 rounded-lg m-8">
        <p>C’est le moment de vendre</p>
        @auth
            <a href="{{ route('post') }}">
                <button class="bg-orange-500 text-white px-6 py-3 rounded-lg font-bold text-lg">Déposer une annonce</button>
            </a>
        @else
            <a href="{{ route('login') }}">
                <button class="bg-orange-500 text-white px-6 py-3 rounded-lg font-bold text-lg">Déposer une annonce</button>
            </a>
        @endauth
    </div>

    <div class="top-categories mx-8">
        <h2 class="my-8 text-2xl">Top catégories</h2>
        <div class="flex flex-wrap" style="        gap: 20px;
        margin: 20px;">
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Vacances</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Astuces Maison</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Offres d'emploi</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Ventes immo</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Voitures</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Ameublement</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Electroménager</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Décoration</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Ordinateur</div>
            </div>
            <div class="rounded-lg bg-orange-100 cursor-pointer transform hover:scale-105 transition duration-300"
                style='width: calc(25% - 20px);
                height: 100px;         
                padding-top: 1rem;
                padding-left: 1rem;'>
                <div class="caption font-bold">Livre</div>
            </div>
            <div class="flex items-center m-8">
                <a href='/' class="text-gray-500 hover:text-black">Voir tous</a>
            </div>
        </div>
    </div>

</body>

</html>
