@extends('layouts.master')

@section('title', 'Accueil')


@section('content')
    <main>
        <section class="hero position-relative">
            <div class="hero__background"></div>
            <div class="hero__datas position-absolute text-center col-5">
                <h1 class="hero__title">Création de contenu digital à distance</h1>
                <p class="hero__text mt-4">Digistos est spécialisé dans la création de site web et médias associés (vidéos,
                    podcasts, réseaux sociaux).
                <p>
                <div class="hero__actions d-flex flew-row justify-content-center mt-4">
                    <a class="btn btn-primary" href="#">Domaines d'expertise</a>
                    <a class="btn btn-light" href="#">Services</a>
                </div>
            </div>
        </section>
    </main>
@stop
