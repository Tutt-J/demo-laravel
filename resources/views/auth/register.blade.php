@extends('layouts.master')

@section('content')
    <div class="container mb-5">
        <h1 class="text-center">Inscription</h1>
        <form role="form" method="POST" action="{{ route('register') }}" class="d-flex flex-column align-items-center">
            @csrf
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <label for="name" class="form-label">Nom : </label>
                <input type="name" class="form-control" id="name" name="name" value="{{old('name')}}" required autofocus >
                {{-- <p>{{$errors->get('name')}}</p> --}}
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <label for="email" class="form-label">Adresse e-mail : </label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <label for="password" class="form-label">Mot de passe : </label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <label for="password_confirmation" class="form-label">Mot de passe : </label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
        <div class="text-center py-3">
            <p><a href="{{ route('login') }}" class="mb-3">J'ai déjà un compte</a></p>
        </div>
       
    </div>
@endsection
{{-- 
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

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
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
