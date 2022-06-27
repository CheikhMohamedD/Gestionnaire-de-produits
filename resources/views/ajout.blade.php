@extends('layout')

@section('contenu')
    <form action="/ajout-produit"  method="post" class="mx-3 section">
  {{ csrf_field() }}
    <h1 class="mt-3">Ajouter un produit</h1>
    <div class="field">
        <label class="label">Nom Produit</label>
        <div class="control">
          <input class="input is-info" type="text" name="nom" placeholder="Nom Produit">
        </div>
      </div>

      <div class="field">
        <label class="label">Prix Produit</label>
        <div class="control">
          <input class="input is-info" type="text" name="prix" placeholder="Prix Produit">
        </div>
      </div>

      <div class="mb-3">
        <label  class="label">Description Produit</label>
      <div class="control">
        <textarea class="input is-info" height="30px" rows="3" name="description" placeholder="Description produit"></textarea>
      </div>
      </div>

      <div class="field">
        <label class="label">Stock</label>
        <div class="control">
          <input class="input is-info" type="number" name="stock" placeholder="Stock">
        </div>
      </div>
      <div class="field">
        <div class="control">
          <button style="color: #ffffff;background-color: #1C737E;" class="button is-link" type="submit">Ajouter</button>
        </div>
      </div>

</form>
@endsection
