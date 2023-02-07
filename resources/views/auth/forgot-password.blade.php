@extends('layouts.master')

@section('title', 'Mot de passe oublié')

@section('content')
    {{-- <x-guest-layout>
        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button>
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout> --}}
    <div class="container pb-5">
        <h1 class="text-center">Vous avez oublié votre mot de passe ?</h1>
        <p class="text-center">Pas d'inquiétude, renseigenz votre e-mail et nous vous enverrons un lien de réinitialisation</p>
        <form role="form" method="POST" action="{{ route('password.email') }}"
            class="d-flex flex-column align-items-center">
            @csrf
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="email" :text="__('Adresse e-mail : ')" />
                <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <x-primary-button>Envoyer le lien</x-primary-button>
        </form>
    </div>
@endsection
