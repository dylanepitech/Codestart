@extends('Base')
@section('title', 'Inscription')

@section('content')

<div style="margin-top: 60px;" class="container headline">
    <h3 style="padding-bottom: 30px;" class="center-align">Vos informations</h3>
<div class="row">

    <form class="col s12" method="post" action="/information">
      @csrf
      <div class="row">
        <div class="input-field col s6">
          <input name="name"  id="name" type="text" class="validate" value="{{$user->name}}">
          <label for="name">Nom</label>
          @error('name')
          <p class="red-text">{{$message}}</p>
          @enderror
        </div>
        <div class="input-field col s6">
          <input name="surname" id="surname" type="text" class="validate" value="{{$user->surname}}">
          <label for="surname">Prénom</label>
          @error('surname')
          <p class="red-text">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="pseudo"  id="pseudo" type="text" class="validate" value="{{$user->pseudo}}">
          <label for="pseudo">Nom d'utilisateur</label>
          @error('pseudo')
          <p class="red-text">{{$message}}</p>
          @enderror
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" id="email" type="email" class="validate" value="{{ $user->email }}">
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
        <div class="col s6 center-align">
            <p>
                 <label>
                  @if ($user->newsletter)
                <input type="checkbox"  name="newsletter" checked />
                @else
                <input type="checkbox"  name="newsletter"  />
                @endif  
                <span>S'abonner a la newsletter</span>
                </label>
             </p>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center-align">
            <button class="btn waves-effect teal lighten-2 waves-light" type="submit" name="action">Modifier mes informations
                <i class="material-icons  right">send</i>
            </button>
        </div>
      </div>
    </form>

  </div>
</div>
@endsection