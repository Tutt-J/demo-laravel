@extends('layouts.master')

@section('title', 'Inscription')

@section('content')
    <div class="container mb-5">
        <h1 class="text-center">Inscription</h1>
        <form role="form" method="POST" action="{{ route('register') }}" class="d-flex flex-column align-items-center">
            @csrf
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="email" :text="__('Nom :')" />
                <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="email" :text="__('Adresse e-mail : ')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="password" :text="__('Mot de passe :')" />
                <x-text-input id="password" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="password_confirmation" :text="__('Répéter le mot de passe :')" />
                <x-text-input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <x-primary-button>S'inscrire</x-primary-button>
        </form>
        <div class="text-center py-3">
            <p><a href="{{ route('login') }}" class="mb-3">J'ai déjà un compte</a></p>
        </div>

    </div>
@endsection