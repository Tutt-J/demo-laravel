@extends('layouts.master')

@section('title', 'Mot de passe oublié')

@section('content')
    {{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
    <div class="container pb-5">
        <h1 class="text-center">Réinitialisation du mot de passe</h1>
        <form role="form" method="POST" action="{{ route('password.store') }}"
            class="d-flex flex-column align-items-center">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <label for="email" class="form-label">Adresse e-mail : </label>
                <input type="email" class="form-control" id="email" name="email"
                    value="{{ old('email', $request->email) }}" autofocus required>
                {{-- <p>{{ $errors->get('email') }}</p> --}}
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <label for="password" class="form-label">Mot de passe : </label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <label for="password_confirmation" class="form-label">Répéter le mot de passe : </label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
