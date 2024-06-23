<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LeBonCoin</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="px-8 py-4 flex items-center justify-center">
        <a href="{{ route('index') }}">
            <span class="text-orange-500" style="font-weight: bolder; font-size: 3rem">leboncoin</span>
        </a>
    </div>

    <div class="max-w-md mx-8 bg-white p-6 rounded-lg shadow-lg mt-8">
        <h2 class="text-xl font-bold mb-2">Rejoignez-nous!</h2>
        <p class="mb-6 text-gray-600">Créez votre compte pour profiter de toutes nos fonctionnalités.</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold text-gray-700">E-mail *</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-4">
                <label for="username" class="block text-sm font-bold text-gray-700">Nom d'utilisateur *</label>
                <input type="text" id="username" name="username" required
                    class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-sm font-bold text-gray-700">Mot de passe *</label>
                <input type="password" id="password" name="password" required
                    class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-sm font-bold text-gray-700">Confirmer mot de passe
                    *</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <button type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Créer mon compte →
            </button>
            <p class="mt-4 text-center text-sm text-gray-600">
                Déjà inscrit ? <a href="{{ route('login') }}" class="underline hover:text-black">Se connecter</a>
            </p>

            @if ($errors->any())
                <div class="text-red-500 border px-4 py-3 rounded relative mb-4 ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>

</body>

</html>
