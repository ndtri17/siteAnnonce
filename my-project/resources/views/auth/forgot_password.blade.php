<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password - LeBonCoin</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="px-8 py-4 flex items-center justify-center">
        <a href="{{ route('index') }}">
            <span class="text-orange-500" style="font-weight: bolder; font-size: 3rem">leboncoin</span>
        </a>
    </div>

    <div class="max-w-md mx-8 bg-white p-6 rounded-lg shadow-lg mt-8">
        <h2 class="text-xl font-bold mb-2">Mot de passe oublié</h2>
        <p class="mb-6 text-gray-600">Entrez votre email pour recevoir ton mot de passe.</p>
        <form action="#" method="POST">
            @csrf
            <div class="mb-6">
                <label for="email" class="block text-sm font-bold text-gray-700">E-mail *</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>
            <button type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Envoyer les instructions →
            </button>
            <p class="mt-4 text-center text-sm text-gray-600">
                Se souvenir du mot de passe ? <a href="{{ route('login') }}" class="underline hover:text-black">Se connecter</a>
            </p>
        </form>
    </div>

</body>
</html>
