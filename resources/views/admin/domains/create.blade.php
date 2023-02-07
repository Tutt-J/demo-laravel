@extends('layouts.master-admin')

@section('title', 'Domaines d\'expertise')

@section('content')
    <div class="container mb-5">
        <h1 class="text-center">Créer un domaine</h1>
        <form role="form" method="POST" action="{{ route('domains.store') }}" class="d-flex flex-column align-items-center">
            @csrf
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="title" :text="__('Intitulé :')" />
                <x-text-input id="title" type="text" name="title" :value="old('title')" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="icon" :text="__('Icone : ')" />
                <x-text-input id="icon" type="text" name="icon" :value="old('icon')" required />
                <x-input-error :messages="$errors->get('icon')" class="mt-2" />
            </div>
            <x-primary-button>Ajouter</x-primary-button>
        </form>
    </div>

@endsection
