@extends('Base')
@section('title', 'Inscription')

@section('content')

@if($errors->has('identifiant'))
            <div class="card-panel red center-align lighten-2">
         {{ $errors->first('identifiant') }}
           </div>
          @endif

<div style="margin-top: 60px;" class="container headline">
    <h3 style="padding-bottom: 30px;" class="center-align">Formulaire de connexion</h3>
   <p class="center-align"> <a  href="{{route('Inscription.index')}}">Pas encore membre, inscrivez vous !</a></p>
<div class="row">

    <form class="col s12" method="post" action="{{route('Connexion.index')}}">
      @csrf
      <div class="row">
        <div class="input-field col s12">
          <input name="email" id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password" id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center-align">
            <button class="btn waves-effect light-blue waves-light" type="submit" name="action">Se connecter
                <i class="material-icons  right">send</i>
            </button>
        </div>
      </div>
    </form>

  </div>
</div>

@endsection