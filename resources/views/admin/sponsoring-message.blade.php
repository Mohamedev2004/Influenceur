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
        <!-- sidebar menu end -->
        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse border border-gray-300 mt-6">
                <thead>
                    <tr class="bg-[#9C04FF]">
                        <th class="border border-gray-300 px-4 py-2 text-left text-white">Nom</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-white">Email</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-white">Téléphone</th>
                        <th class="border border-gray-300 px-4 py-2 text-left text-white">Fichier PDF</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Demande de Sponsoring 1 -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">Paul Dupont</td>
                        <td class="border border-gray-300 px-4 py-2">paul.dupont@email.com</td>
                        <td class="border border-gray-300 px-4 py-2">+33 6 12 34 56 78</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="path/to/your/pdf-file.pdf" class="text-blue-500 hover:underline" download>Télécharger PDF</a>
                        </td>
                    </tr>

                    <!-- Demande de Sponsoring 2 -->
                    <tr class="hover:bg-gray-100">
                        <td class="border border-gray-300 px-4 py-2">Marie Lemoine</td>
                        <td class="border border-gray-300 px-4 py-2">marie.lemoine@email.com</td>
                        <td class="border border-gray-300 px-4 py-2">+33 6 98 76 54 32</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <a href="path/to/your/pdf-file.pdf" class="text-blue-500 hover:underline" download>Télécharger PDF</a>
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

