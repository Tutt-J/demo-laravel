@extends('layouts.master')

@section('title', 'Connexion')

@section('content')
    <div class="container mb-5">
        <h1 class="text-center">Connexion</h1>
        <form role="form" method="POST" action="{{ route('login') }}" class="d-flex flex-column align-items-center">
            @csrf
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="email" :text="__('Adresse e-mail : ')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="password" :text="__('Mot de passe :')" />
                <x-text-input id="password"
                type="password"
                name="password"
                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mb-3 form-check col-12 col-md-8 col-lg-5">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
            </div>
            <x-primary-button>Se connecter</x-primary-button>
        </form>
        <div class="text-center py-3">
            <p><a href="{{ route('register') }}" class="mb-3">Je n'ai pas encore de compte</a></p>
            <p><a href="{{ route('password.request') }}" class="mb-3">Mot de passe oublié</a></p>
        </div>

    </div>
@endsection
