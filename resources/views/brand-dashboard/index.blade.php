@extends('layouts.dashboard')

@section('content')

<!-- content area -->
<div class="dashboard__content d-flex">
        
        <div class="dashboard__right">
            <div class="dash__content ">

                <div class="my__profile__tab radius-16 bg-white">
                    <nav>
                        <div class="nav nav-tabs">
                            <a class="nav-link active" href="#info">Mon Profil</a>
                        </div>
                    </nav>
                    <form action="">
                        <div class="my__details" id="info">
                            <div class="info__top">
                                <div class="author__image">
                                    <img class="p-4" src="{{asset('assets/img/icon/google-small.svg')}}" alt="">
                                </div>
                                <div class="select__image">
                                    <label for="file" class="file-upload__label">Ajouter une Nouvelle Photo</label>
                                    <input type="file" class="file-upload__input" id="file" required>
                                    <span id="file-name" class="file-name">Aucune image sélectionnée</span>
                                </div>
                            </div>
                            <div class="info__field">
                                <div class="row row-cols-sm-2 row-cols-1 g-3">
                                    <div class="rt-input-group">
                                        <label for="name">Nom de la Marque</label>
                                        <input type="text" id="name" placeholder="Full Name" required>
                                    </div>
                                    <div class="rt-input-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" placeholder="jobpath@gmqail.com" required>
                                    </div>
                                </div>
                                <div class="row row-cols-sm-2 row-cols-1 g-3">
                                    <div class="rt-input-group">
                                        <label for="description">Description</label>
                                        <textarea id="description" placeholder="Enter job description" required></textarea>
                                    </div>
                                    <div class="rt-input-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" id="phone" placeholder="+880171234567" required>
                                    </div>
                                    
                                </div>

                                <div class="row row-cols-sm-2 row-cols-1 g-3">
                                <div class="rt-input-group">
                                        <label for="cs">Domaine</label>
                                        <select name="cs" id="cs" class="form-select">
                                            <option value="domaine">Domaine</option>
                                            <option value="domaine">Domaine</option>
                                            <option value="domaine">Domaine</option>
                                        </select>
                                    </div>
                                    <div class="rt-input-group">
                                        <label for="cs">Taille</label>
                                        <select name="cs" id="cs" class="form-select">
                                            <option value="petite">Petite</option>
                                            <option value="moyenne">Moyenne</option>
                                            <option value="grande">Grande</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row row-cols-sm-2 row-cols-1 g-3">
                                    <div class="rt-input-group">
                                        <label for="cc">Type de collaboration</label>
                                        <select name="cc" id="cc" class="form-select">
                                            <option value="18">Design & Development</option>
                                            <option value="19">Digital Marketing</option>
                                            <option value="20">Writing & Translation</option>
                                            <option value="21">Music & Audio</option>
                                            <option value="22">Video & Animation</option>
                                        </select>
                                    </div>
                                    <div class="rt-input-group">
                                        <label for="images"> Images (Max: 3)</label>
                                        <input type="file" id="images" name="images[]" class="form-control" accept="image/*" multiple>
                                    </div>
                                </div>
                                <div class="row row-cols-sm-2 row-cols-1 g-3">
                                    <div class="rt-input-group">
                                        <label for="images">Votre Video</label>
                                        <input type="file" id="video" name="video" class="form-control" accept="video/*" multiple>
                                    </div>
                                </div>


                                <!-- editor area -->
                                <div class="rt-input-group">
                                    <div class="textarea"></div>
                                </div>
                                <!-- editor area end -->
                            </div>
                        </div>
                        <button class="boutton" type="submit">Enregistrer</button>
                    </form>
                    
                </div>

                
            </div>
            <div class="d-flex justify-content-center mt-30">
                <p class="copyright" style="font-size: 15px !important;">Copyright © 2025 All Rights Reserved by cocollab</p>

            </div>
        </div>
    </div>
    <!-- content area end -->



    <x-canva />
    





@endsection

