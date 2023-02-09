@extends('layouts.master-admin')

@section('title', 'Services')

@section('content')
    <div class="container">
        <h1 class="my-3">Services</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary my-3">Ajouter un service</a>
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Icone</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <th scope="row">{{ $service->id }}</th>
                            <td><i class="{{ $service->icon }}"></i></td>
                            <td>{{ $service->title }}</td>
                            <td>
                                <a class="text-info me-3" title="Editer"
                                    href="{{ route('services.update.edit', ['id' => $service->id]) }}"><i
                                        class="fa-solid fa-pen"></i></a>
                                <a data-id="{{ $service->id }}"
                                    data-name="Nom du service à supprimer : {{ $service->title }}" href="#"
                                    data-bs-toggle="modal" data-bs-target="#modal"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <x-modal :title="__('Voulez vous vraiment supprimer le service ?')" :method="__('delete')" :buttonName="__('Supprimer')" :actionPath="__('services.destroy')" />
    </div>

@endsection
