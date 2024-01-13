@extends('Base')
@section('title', 'Learn index')

@section('content')

<div style="margin-top: 30px;" class="container center-align headline">
    <div class="row gap-row">
        <div class="col s12 m6">
            <a href="{{route('Information.index')}}" class="waves-effect waves-light teal lighten-2 btn-large"><i class="material-icons left">account_box</i>Mes informations</a>
        </div>
        <div class="col s12 m6">
            <a href="{{route('logout')}}" class="waves-effect waves-light teal lighten-2 btn-large"><i class="material-icons left">airline_seat_flat</i>Se déconnecter</a>
        </div>
    </div>
</div>

        <div class="container mt center-align headline">
          <h4 class="teal-text">Hey heureux de vous revoir {{$user->pseudo}} !</h4>
        </div>

    <div class="container box mt center-align headline">
        <h4>Aucune annonces dernièrement...</h4>
        <p><a href="">Voir les anciennes annonces</a></p>
    </div>

    <div class="container headline">
    <h4 class="center-align">Informations sur les langages</h4>
    <ul class="collapsible">
        <li>
            <div class="collapsible-header"><i class="material-icons">create</i>HTML</div>
            <div class="collapsible-body">
                <span>
                    HTML constitue la majeure partie d'un site web ou d'une application web. Il est le squelette qui permet de structurer l'ensemble de votre page. Il vous permet d'afficher du texte, des images, des vidéos et d'organiser le tout. Simple et rapide d'apprentissage.
                </span>
            </div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">color_lens</i>CSS</div>
            <div class="collapsible-body">
                <span>
                    CSS, un langage de style, permet de donner de la couleur et de la forme au HTML. Il améliorera considérablement l'expérience utilisateur et donc la visibilité de votre site ou application web. Indispensable à l'apprentissage, le CSS vous permettra de réaliser vos plus beaux sites statiques.
                </span>
            </div>
        </li>
        </div>
         <br>
        <div class="container headline">
        <table class="striped">
        <thead>
          <tr>
              <th>Language</th>
              <th>Tutoriel</th>
              <th>Score Quizz</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>HTML</td>
            <td><a href="{{route('Html.index')}}">Disponible ici</a></td>
            @if($countTrue == 0)
             <td> <a href="{{ route('Quizzhtml.index') }}"> Quizz disponible ici </a> </td>
            @else
             <td>{{ $countTrue }}/10</td>
            @endif
          </tr>
          <tr>
            <td>CSS</td>
            <td><a href="{{route('Html.index')}}">Disponible ici</a></td>
          </tr>
        </tbody>
      </table>
        </div>
</div>


    <style>
        .gap-row > .col {
    margin-bottom: 15px; /* Ajustez la valeur de la marge selon vos besoins */
}
    </style>
    
@endsection