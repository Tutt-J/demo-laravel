@extends('layouts.master')

@section('title', 'Mot de passe oublié')

@section('content')
    <div class="container pb-5">
        <h1 class="text-center">Réinitialisation du mot de passe</h1>
        <form role="form" method="POST" action="{{ route('password.store') }}"
            class="d-flex flex-column align-items-center">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="email" :text="__('Adresse e-mail : ')" />
                <x-text-input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required />
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
            <x-primary-button>Mettre à jour</x-primary-button>
        </form>
    </div>
@endsection
