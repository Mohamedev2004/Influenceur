@extends('layouts.forms')

@section('content')

<a href="{{route('welcome')}}" class="absolute top-4 left-8 text-white text-4xl">
        &larr;
</a>
<div class="w-full max-w-2xl bg-purple-500 p-6 sm:p-10 rounded-3xl shadow-lg text-white text-center">
    <h2 class="text-2xl sm:text-3xl font-bold text-white">Sponsoring</h2>
    <p class="text-base sm:text-lg mt-2">Demander un demo</p>
    <form class="mt-6 text-left">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label class="block font-medium">Nom Complet</label>
                <input type="text" placeholder="Nom Complet" class="w-full px-4 py-3 mt-2 bg-white text-gray-800 border-none rounded-lg focus:outline-none">
            </div>
            <div>
                <label class="block font-medium">Numéro de téléphone</label>
                <input type="text" placeholder="Numéro de téléphone" class="w-full px-4 py-3 mt-2 bg-white text-gray-800 border-none rounded-lg focus:outline-none">
            </div>
            <div>
                <label class="block font-medium">E-mail</label>
                <input type="text" placeholder="E-mail" class="w-full px-4 py-3 mt-2 bg-white text-gray-800 border-none rounded-lg focus:outline-none">
            </div>
            <div>
                <label class="block font-medium">Télécharger un fichier PDF</label>
                <label for="fileInput" class="w-full mt-2 flex items-center gap-2 justify-center px-4 py-3 bg-white text-gray-800 border border-gray-300 rounded-lg shadow-sm cursor-pointer hover:bg-gray-100 transition">
                    <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v12m0 0l-3-3m3 3l3-3M8 16h8"></path>
                    </svg>
                    <span id="fileName" class="text-gray-600">Document</span>
                    <input id="fileInput" type="file" accept=".pdf" class="hidden">
                </label>
            </div>
        </div>
        <button type="submit" class="w-full mt-6 bg-purple-900 text-white py-3 rounded-lg hover:bg-purple-950 transition">Envoyer</button>
    </form>
</div>

@endsection
