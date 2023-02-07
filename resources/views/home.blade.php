@extends('layouts.master')

@section('title', 'Accueil')


@section('content')
    <main>
        <section class="hero container-fluid d-flex justify-content-center">
            <div class="hero__datas text-center col-12 col-lg-10 col-xl-7 col-xxl-6">
                <h1 class="hero__title">Création de contenu digital à distance</h1>
                <p class="hero__text mt-4">Digistos est spécialisé dans la création de site web et médias associés (vidéos,
                    podcasts, réseaux sociaux).
                <p>
                <div class="hero__actions d-flex flex-column flex-sm-row justify-content-center mt-4">
                    <a class="btn btn-primary" href="#">Domaines d'expertise</a>
                    <a class="btn btn-light" href="#">domains</a>
                </div>
            </div>
        </section>
        <section class="domains container py-5 d-flex flex-column flex-sm-row flex-wrap justify-content-sm-around">
            <h2 class="domains__title text-center col-12">Domaines d'expertise</h2>
            <div class="domains__item col-12 col-md-3">
                <i class="fa-solid fa-globe domains__icon"></i>
                <p class="domains__description">Création de site web</p>
            </div>
            <div class="domains__item col-12 col-md-3">
                <i class="fa-solid fa-bullhorn domains__icon"></i>
                <p class="domains__description">Supports de communication</p>
            </div>
            <div class="domains__item col-12 col-md-3">
                <i class="fa-solid fa-share-nodes domains__icon"></i>
                <p class="domains__description">Aide à la création et gestion des réseaux sociaux</p>
            </div>
            <div class="domains__item col-12 col-md-3">
                <i class="fa-solid fa-paper-plane domains__icon"></i>
                <p class="domains__description">Newsletter</p>
            </div>
            <div class="domains__item col-12 col-md-3">
                <i class="fa-solid fa-cloud domains__icon"></i>
                <p class="domains__description">Solutions cloud</p>
            </div>
            <div class="domains__item col-12 col-md-3">
                <i class="fa-solid fa-circle-play domains__icon"></i>
                <p class="domains__description">Montage et mixage de vidéo</p>
            </div>
            <div class="domains__item col-12 col-md-3">
                <i class="fa-solid fa-microphone-lines domains__icon"></i>
                <p class="domains__description">Montage et mixage de podcast</p>
            </div>
        </section>
        <section class="services container pb-5 d-flex flex-column flex-sm-row flex-wrap justify-content-sm-around">
            <h2 class="services__title text-center col-12">Services</h2>
            <div class="services__item col-12 col-md-3">
                <i class="fa-solid fa-wrench services__icon"></i>
                <p class="services__description">Dépannage informatique</p>
            </div>
            <div class="services__item col-12 col-md-3">
                <i class="fa-solid fa-building-columns services__icon"></i>
                <p class="services__description">Formation, conseils et accompagnement</p>
            </div>
            <div class="services__item col-12 col-md-3">
                <i class="fa-solid fa-desktop services__icon"></i>
                <p class="services__description">Installation informatique et multimédia</p>
            </div>
        </section>
    </main>
@stop
