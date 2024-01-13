@extends('base')
@section('title','Css')
@section('content')

<div class="container center-align">
        <h2>À quoi sert le CSS ?</h2>
        <br>
        <p>Le CSS est l'acronyme de Cascading Style Sheet, traduit par feuille de style en cascade. Comme son nom l'indique, le code que l'on va écrire ressemblera à une cascade très structurée. Il est obligatoire de passer par le CSS pour développer un site web, une application ou toute autre chose nécessitant un design et une interface graphique visibles par un utilisateur. Le CSS n'est pas un langage de programmation à proprement parler, mais plutôt un langage de style qui donnera forme et vie à votre projet. Voici un petit exemple de CSS :</p>
    <br>
    <pre class="brush:css">
        p{
            color: red;
            font-size: 1.2em;
        }

        div{
            with: 100%;
            height: 400px;
        }
    </pre>
    <br>
    <p>Nous allons décortiquer l'exemple ci-dessus. Tout d'abord, nous pouvons voir une lettre ou un mot, cela va permettre au navigateur de savoir quelle partie cibler. Le "P" signifie que l'on va appliquer du style à toutes nos balises &lt;p&gt;, donc elles seront dorénavant rouges avec une taille de 1.2em (il existe plusieurs types de tailles possibles, nous y reviendrons un peu plus tard...). <br>
    Ensuite, on ouvre des accolades pour y écrire notre style à l'intérieur. On commence à la ligne avec le type de style que l'on veut appliquer. Dans notre cas, la couleur (notez que nous utilisons uniquement l'anglais pour communiquer avec le navigateur). Ensuite, on lui indique la couleur choisie, par plusieurs méthodes (le nom de la couleur "red", par hexadécimal "#FF0000" ou par RGB "rgb(255,0,0)"). Ce sont les méthodes que vous retrouverez le plus souvent. Le code hexadécimal est assez simple à retenir, mais le RGB permet d'aller plus loin dans la personnalisation de la couleur (intensité, opacité...). <br>
    Sur la deuxième ligne, nous retrouvons le type de style "font-size", qui définit la taille de la police d'écriture. Ici, elle est mise à 1.2em (il existe beaucoup d'unités de mesure). <br>
    Avec ces deux lignes de code, vous avez déjà donné du style à votre projet.</p>
    <br>
    <div class="box">
        <h4>Le ciblage</h4>
        <p>Dans un document, nous avons une multitude de balises et de conteneurs différents. Il est donc essentiel de pouvoir différencier le moindre élément pour le rendre interactif ou distinct d'un autre. Pour cela, plusieurs méthodes s'offrent à nous </p>
        <h5>Ciblé par catégorie</h5>
        <p>Pour cibler par groupe ou catégorie, rien de plus simple. Si vous voulez que tous les textes de votre projet soient de la même couleur et de la même taille, on les ciblera en général.</p>
        <br>
        <pre class="brush:css">
            p{
                color: blue;
                font-size: 1.3em;
            }
        </pre>
        <br>
        <p>Voilà une situation classique et efficace dans la plupart des cas, et on peut continuer de même avec toutes les balises de notre projet.</p>
        <br>
        <pre class="brush:css">
            body{
                backgroud-color: green;
            }
            div{
                height: 100px;
                width: 100x;
            }
            h1{
                position: absolute;
                text-decoration: underline;
            }
        </pre>
        <br>
        <p>La liste des balises est aussi longue que celle présente dans votre projet. <br>  
        Donc, le ciblage général est très pratique si l'on fait un site vitrine ou standardisé, mais dans un projet plus complexe, nous avons besoin de savoir comment cibler un &lt;h2&gt; ou une &lt;div&gt; en priorité. Pour cela, il existe les classes ou les ID.</p>
        <br>
        <h5>Pointer vers un élément en particulier</h5>
        <p>Imaginons que vous souhaitiez cibler un texte en particulier dans la balise &lt;p&gt;, alors vous auriez simplement besoin d'ajouter une classe ou un ID.</p>
        <br>
        <pre class="brush:html">
            <p class="text_introduction"></p>
            <p id="text_introduction"></p>
        </pre>
        <p>Nous avons donc défini une classe et un ID, maintenant il suffit de les cibler dans le CSS.</p>
        <br>
        <pre class="brush:css">
            .text_introduction{
                color: red;
            }
            #text_introduction{
                color: blue;
            }
        </pre>
        <br>
        <p>Pour cibler une classe, nous allons utiliser un "." pour indiquer au navigateur qu'il doit agir sur cette dernière. <br>
        Pour l'ID, nous allons utiliser le "#". <br>
        Vous pouvez ainsi créer une infinité de classes et d'ID pour cibler toutes les parties d'un projet. Bien sûr, dans un projet organisé et structuré, il est recommandé de limiter l'utilisation de nombreuses classes et ID...</p>
        <p>Un élement peut comporter plusieur classes</p>
        <pre class="brush:html">
            <p class="text_introduction text_end float demi_titre"></p>
        </pre>
    </div>
    <div class="row">
        <div class="col s12 center-align">
            <p><a href="{{route('Learn.index')}}">Retourner au menu</a></p>
        </div>
    </div>
</div>

@endsection