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
                                <a class="text-info me-3" title="Editer" href=""><i class="fa-solid fa-pen"></i></a>
                                <a href="#" title="Supprimer"
                               
                                    onclick="event.preventDefault(); document.getElementById('{{"destroy-form_{$domain->id}"}}').submit();">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                                <form id="{{"destroy-form_".$domain->id}}" action="{{route('domains.destroy', ['id' => $domain->id])}}"
                                    method="POST" class="d-none">
                                    @method('delete')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
