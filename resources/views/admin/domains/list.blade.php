@extends('layouts.master-admin')

@section('title', 'Domaines d\'expertise')

@section('content')
    <div class="container">
        <h1 class="my-3">Domaines d'expertise</h1>
        <a href="{{ route('domains.create') }}" class="btn btn-primary my-3">Ajouter un domaine</a>
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
                    @foreach ($domains as $domain)
                        <tr>
                            <th scope="row">{{ $domain->id }}</th>
                            <td><i class="{{ $domain->icon }}"></i></td>
                            <td>{{ $domain->title }}</td>
                            <td>
                                <a class="text-info me-3" title="Editer"
                                    href="{{ route('domains.update.edit', ['id' => $domain->id]) }}"><i
                                        class="fa-solid fa-pen"></i></a>
                                <a data-id="{{ $domain->id }}"
                                    data-name="Nom du domaine à supprimer : {{ $domain->title }}" href="#"
                                    data-bs-toggle="modal" data-bs-target="#modal"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <x-modal :title="__('Voulez vous vraiment supprimer le domaine d\'expertise ?')" :method="__('delete')" :buttonName="__('Supprimer')" :actionPath="__('domains.destroy')" />
    </div>

@endsection
