@extends('layouts.master-admin')

@section('title', 'Domaines d\'expertise')

@section('content')
    <div class="container">
        <h1 class="my-5">Domaines d'expertise</h1>
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
                                <a class="text-danger" title="Supprimer" href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
