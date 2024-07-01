    <!DOCTYPE html>
    <html lang="fr">

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
                <span class="text-orange-500" style="font-weight: bolder; font-size: 3rem">leboncoin</span>
            </a>
        </div>

        <div class="max-w-lg mx-8 bg-white p-6 rounded-lg shadow-lg mt-5">
            <h2 class="text-2xl font-bold mb-4">Déposer une annonce</h2>
            <form action="{{ route('post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class="block text-sm font-bold text-gray-700">Titre *</label>
                    <input type="text" id="title" name="title" required
                        class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-sm font-bold text-gray-700">Catégorie *</label>
                    <select id="category" name="category" required class="w-full p-2 border border-gray-300 rounded mt-1">
                        <option value="">Sélectionner une catégorie</option>
                        <option value="immobilier">Immobilier</option>
                        <option value="véhicules">Véhicules</option>
                        <option value="vacances">Locations de vacances</option>
                        <option value="emploi">Emploi</option>
                        <option value="mode">Mode</option>
                        <option value="maison">Maison & Jardin</option>
                        <option value="famille">Famille</option>
                        <option value="électronique">Électronique</option>
                        <option value="loisirs">Loisirs</option>
                        <option value="autres">Autres</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="location" class="block text-sm font-bold text-gray-700">Localisation *</label>
                    <input type="text" id="location" name="location" required
                        class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-sm font-bold text-gray-700">Prix *</label>
                    <input type="number" id="price" name="price" required
                        class="w-full p-2 border border-gray-300 rounded mt-1" step="0.01" min="0">
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-sm font-bold text-gray-700">Description *</label>
                    <textarea id="description" name="description" required class="w-full p-2 border border-gray-300 rounded mt-1"
                        rows="5"></textarea>
                </div>

                <div class="mb-6">
                    <label for="photos" class="block text-sm font-bold text-gray-700">Ajouter des photos</label>
                    <input type="file" id="photos" name="photos[]" multiple
                        class="w-full p-2 border border-gray-300 rounded mt-1">
                </div>

                <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Déposer l'annonce →
                </button>

                @if ($errors->any())
                    <div class="text-red-500 border px-4 py-3 rounded relative mt-4">
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
