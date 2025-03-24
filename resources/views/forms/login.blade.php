@extends('layouts.forms')

@section('content')

<a href="{{route('welcome')}}" class="absolute top-4 left-8 text-white text-4xl">
    &larr;
</a>
<div class="w-full max-w-md bg-purple-500 p-6 sm:p-10 rounded-3xl shadow-lg text-white text-center">
    <h2 class="text-2xl sm:text-3xl font-bold text-white">Se Connecter</h2>
    <p class="text-base sm:text-lg mt-2">Bienvenue ! Connectez-vous à votre compte.</p>
    <form class="mt-6 text-left">
        <div>
            <label class="block font-medium">E-mail</label>
            <input type="text" placeholder="E-mail" class="w-full px-4 py-3 mt-2 bg-white text-gray-800 border-none rounded-lg focus:outline-none">
        </div>
        <div class="mt-4">
            <label class="block font-medium">Mot de passe</label>
            <input type="password" placeholder="Mot de passe" class="w-full px-4 py-3 mt-2 bg-white text-gray-800 border-none rounded-lg focus:outline-none">
        </div>
        <button type="submit" class="w-full mt-6 bg-purple-900 text-white py-3 rounded-lg hover:bg-purple-950 transition">Se Connecter</button>
    </form>
    <p class="mt-4 text-xs sm:text-sm">Vous n'avez pas de compte ? <a href="{{route('register')}}" class="text-white underline">Inscrivez-vous.</a></p>
</div>

@endsection
