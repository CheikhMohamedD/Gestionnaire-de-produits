@extends('layout')

@section('contenu')
<form action="/connexion" method="post" class="mx-3 section">
    {{ csrf_field() }}
    <h1 class="mt-3">Connexion</h1>

    <div class="field">
      <label class="label">Email</label>
      <div class="control">
         <input class="input is-info" type="email" name="email" placeholder="Email" value=" {{ old('email')}} " >
      </div>
      @if ($errors->has('email'))
      <p class="help is-danger"> {{ $errors->first('email') }} </p>
      @endif
   </div>

   <div class="field">
      <label class="label">Mot de passe</label>
      <div class="control">
         <input class="input is-info" type="password" name="password" placeholder="Mot de passe"  >
      </div>
      @if ($errors->has('password'))
      <p class="help is-danger"> {{ $errors->first('password') }} </p>
      @endif
   </div>

   <div class="fiel">
      <div class="control">
         <button style="color: #ffffff;background-color: #1C737E;" class="button is-link" type="submit">Connexion</button>
      </div>
   </div>
</form>
@endsection
