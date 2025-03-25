@extends('layouts.dashboard')

@section('content')

<div class="dashboard__content d-flex">
<x-sidebar />
<div class="dashboard__rightt">
    <div class="dash__content ">
        <!-- sidebar menu -->
        <div class="sidebar__menu d-md-block d-lg-none">
            <div class="sidebar__action"><i class="fa-sharp fa-regular fa-bars"></i> Sidebar</div>
        </div>
        <div class="flex items-center justify-right">
            <a href="{{route('packadd')}}">
                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Ajouter un Pack</button>
            </a>
        </div>
        <!-- sidebar menu end -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300 mt-6">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2 text-left">Nom du Pack</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Tag</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Caractéristiques</th>
                        <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Pack 1 -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">Pack de Base</td>
                        <td class="border border-gray-300 px-4 py-2">Essentiel</td>
                        <td class="border border-gray-300 px-4 py-2">
                            - 2 services inclus <br>
                            - Accès limité <br>
                            - Support basique
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{route('packedit')}}">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </td>
                    </tr>

                    <!-- Pack 2 -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">Pack Avancé</td>
                        <td class="border border-gray-300 px-4 py-2">Pro</td>
                        <td class="border border-gray-300 px-4 py-2">
                            - 3 services inclus <br>
                            - Support prioritaire <br>
                            - Accès à des fonctionnalités avancées
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{route('packedit')}}">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </td>
                    </tr>

                    <!-- Pack 3 -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">Pack Premium</td>
                        <td class="border border-gray-300 px-4 py-2">Elite</td>
                        <td class="border border-gray-300 px-4 py-2">
                            - 5 services inclus <br>
                            - Support VIP <br>
                            - Accès à toutes les fonctionnalités
                        </td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="{{route('packedit')}}">
                                <button class="bg-purple-600 text-white py-1 px-3 rounded-md hover:bg-purple-900">Modifier</button>
                            </a>
                            <a href="">
                                <button class="bg-red-600 text-white py-1 px-3 rounded-md hover:bg-red-900 mt-1">Supprimer</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-30">
    <p class="copyright" style="font-size: 15px !important;">Copyright © 2025 All Rights Reserved by cocollab</p>
    </div>
</div>
</div>
</div>
<!-- content area end -->

<x-canva />

@endsection

