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
        <a href={{ route('index') }}>
            <span class=" text-orange-500" style="font-weight: bolder; font-size: 3rem">leboncoin</span>
        </a>
    </div>

    <div class="max-w-md mx-8 bg-white p-6 rounded-lg shadow-lg mt-8">
        <h2 class="text-xl font-bold mb-2">Bonjour!</h2>
        <p class="mb-6 text-gray-600">Connectez-vous pour découvrir toutes nos fonctionnalités.</p>
        <form action="{{ route('login')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-bold text-gray-700">E-mail *</label>
                <input type="email" id="email" name="email" required
                    class="w-full p-2 border border-gray-300 rounded mt-1">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-bold text-gray-700">Mot de passe *</label>
                <input type="password" id="password" name="password" required
                    class="w-full p-2 border border-gray-300 rounded mt-1">
                <a href=" {{ route('forgot_password') }}"
                    class="text-smmt-2 inline-block text-gray-600 underline hover:text-black">Mot de passe oublié</a>
            </div>
            <button type="submit"
                class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Se connecter →
            </button>

            <p class="mt-4 text-center text-sm text-gray-600">
                Envie de nous rejoindre ? <a href={{ route('register') }} class="underline hover:text-black">Créer un
                    compte</a>
            </p>

            @if ($errors->any())
                <div class="text-red-500 border px-4 py-3 rounded relative mb-4">
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
