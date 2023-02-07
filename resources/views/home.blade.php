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
                    <a class="btn btn-light" href="#">Services</a>
                </div>
            </div>
        </section>
        <section class="services">
            <h2>Domaines d'expertise</h2>
        </section>
    </main>
@stop
