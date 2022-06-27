@extends('layout')

@section('contenu')
<form action="{{ route('modifier', ['id'=>$liste['id']]) }}"  method="post" class="mx-3 section">
  {{ csrf_field() }}
  @csrf
  @method('PUT')
    <h1 class="mt-3">Modifications apportees pour {{$liste->nom}}</h1>
    <div class="field">
        <label class="label">Nom Produit</label>
        <div class="control">
          <input class="input is-info" type="text" name="nom"
          placeholder="Nom Produit"  value="{{ $liste['nom']}}">
        </div>
      </div>

      <div class="field">
        <label class="label">Prix Produit</label>
        <div class="control">
          <input class="input is-info" type="text" name="prix"
           placeholder="Prix Produit" value="{{ $liste['prix']}}">
        </div>
      </div>

      <div class="field">
        <label  class="label">Description Produit</label>
      <div class="control">
        <textarea class="input is-info" type="text" rows="3" name="description"
        placeholder="Description produit"> {{ $liste['description']}}</textarea>
      </div>
      </div>

      <div class="field">
        <label class="label">Stock</label>
        <div class="control">
          <input class="input is-info" type="number" name="stock"
          placeholder="Stock"  value="{{ $liste['stock']}}">
        </div>
      </div>
      <div class="field">
        <div class="control">
          <button style="color: #ffffff;background-color: #1C737E;" class="button is-link" type="submit">Ajouter</button>
        </div>
      </div>

</form>
@endsection
