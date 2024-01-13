@extends('Base')
@section('title', 'Inscription')

@section('content')
<div class="container center-align">
    <div style="margin-top: 40px;" class="row">
        <div class="col s3">
            <img height="100" src="{{asset('logos/css.png')}}" alt="">
        </div>
        <div class="col s3">
            <img height="100" src="{{asset('logos/html.png')}}" alt="">
        </div>
        <div class="col s3">
            <img height="100" src="{{asset('logos/js.png')}}" alt="">
        </div>
        <div class="col s3">
            <img height="100" src="{{asset('logos/php.png')}}" alt="">
        </div>
    </div>
</div>
<div style="margin-top: 60px;" class="container headline">
    <h3 style="padding-bottom: 30px;" class="center-align">Formulaire d'inscription</h3>
   <p class="center-align"> <a  href="">Déja membre, connectez vous !</a></p>
<div class="row">

    <form class="col s12" method="post" action="{{route('Inscription.index')}}">
      @csrf
      <div class="row">
        <div class="input-field col s6">
          <input name="name"  id="name" type="text" class="validate" value="{{ old('name') }}">
          <label for="name">Nom</label>
          @error('name')
          <p class="red-text">{{$message}}</p>
          @enderror
        </div>
        <div class="input-field col s6">
          <input name="surname" id="surname" type="text" class="validate" value="{{ old('surname') }}">
          <label for="surname">Prénom</label>
          @error('surname')
          <p class="red-text">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="pseudo"  id="pseudo" type="text" class="validate" value="{{ old('pseudo') }}">
          <label for="pseudo">Nom d'utilisateur</label>
          @error('pseudo')
          <p class="red-text">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" id="email" type="email" class="validate" value="{{ old('email') }}">
          <label for="email">Email</label>
          @error('email')
          <p class="red-text">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password" id="password" type="password" class="validate">
          <label for="password">Password</label>
          @error('password')
          <p class="red-text">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="password_confirmation" id="password_confirmation" type="password" class="validate">
          <label for="password_confirmation" >Confirmation de mot de passe</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6 center-align">
            <p>
                 <label>
                <input type="checkbox" checked name="cgv" required/>
                <span>Accepter les CGV</span>
                </label>
             </p>
        </div>
        <div class="col s6 center-align">
            <p>
                 <label>
                <input type="checkbox"  name="newsletter" />
                <span>S'abonner a la newsletter</span>
                </label>
             </p>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center-align">
            <button class="btn waves-effect teal lighten-2 waves-light" type="submit" name="action">Valider l'inscription !
                <i class="material-icons  right">send</i>
            </button>
        </div>
      </div>
    </form>

  </div>
</div>
<div class="container center-align">
    <div style="margin-top: 70px;" class="row">
        <div class="col s3">
            <img height="100" src="{{asset('logos/bash.png')}}" alt="">
        </div>
        <div class="col s3">
            <img height="100" src="{{asset('logos/sql.png')}}" alt="">
        </div>
        <div class="col s3">
            <img height="100" src="{{asset('logos/react.png')}}" alt="">
        </div>
        <div class="col s3">
            <img height="100" src="{{asset('logos/laravel.png')}}" alt="">
        </div>
    </div>
</div>
<style>
    
        @media screen and (max-width: 900px) {
            img{
                height: 50px;
            } 
        }
</style>
@endsection