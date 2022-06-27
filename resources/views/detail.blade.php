@extends('layout')

@section('contenu')
<form action="{{ route('detail', ['id'=>$liste['id']]) }}"  method="post" class="section">
  {{ csrf_field() }}
  @csrf
  @method('PUT')
    <h1>Details sur le produit {{$liste->nom}}</h1>

    <div class="field">
        <label class="label">Nom Produit</label>
        <div class="control">
          <p>{{ $liste['nom']}}</p>
        </div>
      </div>

      <div class="field">
        <label class="label">Prix Produit</label>
        <div class="control">
           <p>{{ $liste['prix']}}</p>
        </div>
      </div>

      <div class="field">
        <label  class="label">Description Produit</label>
      <div class="control">
        <p>{{ $liste['description']}}</p>
      </div>
      </div>

      <div class="field">
        <label class="label">Stock</label>
        <div class="control">
          <p>{{ $liste['stock']}}</p>
        </div>
      </div>
</form>
@endsection
