@extends('layout')

@section('contenu')
<div class="container">
    {{ csrf_field() }}
    <h1 class="mt-3">Liste des Produits</h1>

    <table class="mt-5 mb-5 table table-striped table-bordeless mydatatable">
        @csrf
        @method('PUT')
        <thead>
            <tr class="table-success">
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">prix</th>
                <th scope="col">Information Produit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listes as $liste)
                <tr>

                    <th scope="row">{{$liste->id}}</th>
                    <td>{{$liste->nom}}</td>
                    <td>{{$liste->prix}}</td>
                    <td>
                        <div class="mx-3 btn-group" role="group" aria-label="Basic mixed styles example">
                        <a href="{{route('detail',$liste->id)}}"><button class="btn btn-success">Details</button></a>
                        <a href=" {{route('modifier',$liste->id)}} "><button class="btn btn-warning">Modifier</button></a>
                        <a href=" {{route('supprimer',$liste->id)}} "><button class="btn btn-danger">Suprimer {{$liste->nom}}</button></a>
                        </div>
                     </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
