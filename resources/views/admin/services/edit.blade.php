@extends('layouts.master-admin')

@section('title', 'Services')

@section('content')
    <div class="container mb-5">
        <h1 class="text-center">Editer un service</h1>
        <form role="form" method="POST" action="{{ route('services.update.store', ['id' => $service->id]) }}"
            class="d-flex flex-column align-items-center">
            @csrf
            @method('patch')
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="title" :text="__('Intitulé :')" />
                <x-text-input id="title" type="text" name="title" :value="$service->title" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            <div class="mb-3 col-12 col-md-8 col-lg-5">
                <x-input-label for="icon" :text="__('Icone : ')" />
                <x-text-input id="icon" type="text" name="icon" :value="$service->icon" required />
                <x-input-error :messages="$errors->get('icon')" class="mt-2" />
            </div>
            <x-primary-button>Mettre à jour</x-primary-button>
        </form>
    </div>

@endsection
