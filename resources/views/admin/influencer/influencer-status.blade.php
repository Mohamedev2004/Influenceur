@extends('layouts.dashboard')

@section('content')

<div class="dashboard__content d-flex">
    <x-sidebar />
    <div class="dashboard__rightt">
        <div class="dash__content">
            <h6 class="fw-semibold mb-30">Status d'Influenceur(euse)</h6>
            <form action="{{ route('influencerstatus.update', $influencer->id) }}" method="POST" class="p-4 border rounded-lg shadow w-80">
                @csrf
                @method('PUT')

                <div class="flex items-center gap-4 mb-4">
                    <!-- Profile Image -->
                    <img src="{{ asset($influencer->profile_image) }}" alt="Photo de l'influenceur" class="w-40 h-40 rounded-full border">

                    <!-- Influencer Name -->
                    <div>
                        <p class="text-lg font-bold">{{ $influencer->influencerName }}</p>
                        <p class="text-sm text-gray-500">{{ $influencer->influencerAge }}</p>
                    </div>
                </div>

                <!-- Status Selector -->
                <label for="status" class="block font-bold mb-2">Statut :</label>
                <select name="status" id="status" class="px-4 py-2 border rounded w-full">
                    <!-- Make sure the values correspond to 'Active' and 'Inactive' in your database -->
                    <option value="Inactive" {{ $influencer->user->status == 'Inactive' ? 'selected' : '' }}>Inactif</option>
                    <option value="Active" {{ $influencer->user->status == 'Active' ? 'selected' : '' }}>Actif</option>
                </select>

                <!-- Submit Button -->
                <button type="submit" class="mt-4 px-4 py-2 bg-purple-600 text-white rounded w-full">
                    Mettre à jour
                </button>
            </form>

        </div>

        <div class="d-flex justify-content-center mt-30">
            <p class="copyright" style="font-size: 15px !important;">Copyright © 2025 All Rights Reserved by cocollab</p>
        </div>
    </div>
</div>

<x-canva />

@endsection
