<!DOCTYPE html>
<html lang="fr">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css')}}"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css')}}"  media="screen,projection"/>
      <!-- BRUSH -->
      <link rel="stylesheet" type="text/css" href="{{asset('css/tyrm.css')}}" media="all" />
      <script src="{{asset('js/cbCore.js')}}"></script>
      <script src="{{asset('js/cBrushXml.js')}}"></script>
      <script src="{{asset('js/cBrushCss.js')}}"></script>
      <script src="{{asset('js/cBrushPhp.js')}}"></script>
      <script src="{{asset('js/cBrushSql.js')}}"></script>
      <script src="{{asset('js/cBrushJScript.js')}}"></script>   
      <script>
    SyntaxHighlighter.defaults['auto-links'] = false;
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all();
</script>
<!-- Scroll reveal -->
<script src="https://unpkg.com/scrollreveal"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
  <div class="navbar-fixed">
      <nav>
          <div class="nav-wrapper  deep-orange z-depth-4">
              <a style="padding-left: 10px ;" href="{{route('Home.index')}}" class="brand-logo">CodeStart</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                @if(!auth()->user())
              @if(request()->route()->getName() !== 'Inscription.index')
                  <li><a href="{{route('Inscription.index')}}"><i class="material-icons right">person_add</i>Inscription</a></li>
                  @endif
              @if(request()->route()->getName() !== 'Connexion.index')
                  <li><a  href="{{route('Connexion.index')}}"><i class="material-icons right">person</i>Connexion</a></li>
                  @endif
               @endif
                @if(auth()->user())
               @if(request()->route()->getName() !== 'Learn.index')
                  <li><a href="{{route('Learn.index')}}"><i class="material-icons right">lightbulb_outline</i>Learn</a></li>
                  @endif
                @endif
              </ul>
          </div>
      </nav>
  </div>
      <ul class="sidenav" id="mobile-demo">
                    @if(!auth()->user())
                  @if(request()->route()->getName() !== 'Inscription.index')
                  <li><a href="{{route('Inscription.index')}}"><i class="material-icons right">person_add</i>Inscription</a></li>
                  @endif
                  @if(request()->route()->getName() !== 'Connexion.index')
                  <li><a href="{{route('Connexion.index')}}"><i class="material-icons right">person</i>Connexion</a></li>
                    @endif
                  @endif
                    @if(auth()->user())
                  @if(request()->route()->getName() !== 'Learn.index')
                  <li><a href="{{route('Learn.index')}}"><i class="material-icons right">lightbulb_outline</i>Learn</a></li>
                    @else
                    @endif
                  @endif
      </ul>

        @if(session('success'))
    <div class="card-panel teal center-align lighten-2">
        <span class="white-text">{{ session('success') }}</span>
    </div>
          @endif
          @if(session('error'))
    <div class="card-panel red center-align lighten-2">
        <span class="white-text">{{ session('error') }}</span>
    </div>
          @endif

        @yield('content')


    <footer class="page-footer deep-orange z-depth-4 mt">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">CodeStart</h5>
                <p class="grey-text text-lighten-4">Apprendre a coder avec faciliter !</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Liens utils</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://materializecss.com/dropdown.html">materialize</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://laravel.com/">Laravel</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://github.com/NightDev83">Github</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2023 Copyright CodeStart
            </div>
          </div>
        </footer>

      <script type="text/javascript" src="{{ asset('js/materialize.min.js')}}"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script>
        $(document).ready(function(){
        $('.sidenav').sidenav();
    });
    // scrollreveal
    ScrollReveal().reveal('.headline', {delay: 500});
//  COLLAPSE
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });

  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  $(document).ready(function(){
    $('select').formSelect();
  });
      </script>
</body>
</html>