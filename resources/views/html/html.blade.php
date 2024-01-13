@extends('Base')
@section('title', 'HTML')

@section('content')

<div class="container center-align">
        <h2>À quoi sert le HTML ?</h2>
        <br>
        <p>HTML, acronyme de HyperText Markup Language, est le langage de balisage standard utilisé pour créer et concevoir des pages web. Il utilise un système de balises pour décrire la structure logique du contenu d'une page web.</p>
        <p>Il permet aussi de donner forme à nos idées et de structurer l'ensemble, via des titres, des paragraphes, des listes, des tableaux... et bien d'autres choses. <br>
            Pour vous donner un exemple, voici à quoi cela ressemble :</p>

        <div class="container">
            <pre class="brush:html">
                &lt;h1&gt;Voici les balises utilisées pour un titre&lt;/h1&gt;
                &lt;p&gt;Et maintenant celles utilisées pour du texte&lt;/p&gt;
            </pre>
        </div>

        <h4>Maintenant que vous avez quelques notions, nous allons commencer.</h4>
        <br>
        <p>Tout d'abord, pour pouvoir écrire du code, vous aurez besoin d'un éditeur. <br>
            L'un des plus utilisés est <a href="#">VSCode</a>. N'hésitez pas à l'installer.
            <br>
        </p>

        <div class="box">
            <h4>Les titres</h4>
            <p>Tout site web qui se respecte doit avoir des titres. <br>
                Pour cela, il existe 6 types de titres disponibles pour chaque besoin.
            </p>
            <br>
            <pre class="brush:html">
                &lt;h1&gt;Le titre de la page&lt;/h1&gt;
                &lt;h2&gt;Le titre de section&lt;/h2&gt;
                &lt;h3&gt;Le titre d'article&lt;/h3&gt;
                &lt;h4&gt;Le titre de paragraphe&lt;/h4&gt;
                &lt;h5&gt;Sous-titre&lt;/h5&gt;
                &lt;h6&gt;Sous-titre&lt;/h6&gt;
            </pre>
            <br>
            <p>Comme on peut le voir, les 6 titres ont une utilité différente. Celles énoncées sont purement personnelles et respectent ma convention personnelle. <br>
                Mais il existe une convention universelle pour le titre de la page qui doit être unique : le <span class="red-text">h1</span>. Vous devez absolument l'utiliser dans votre page une seule fois, il en dépend de votre SEO (référencement naturel sur internet). <br>
                Pour le reste, faites comme vous voulez.
            </p>
        </div>

        <p class="teal-text">Maintenant que vous savez faire de jolis titres, passons au texte et au paragraphe en général. <br>
            Cela risque de prendre un peu plus de temps, mais la simplicité d'apprentissage de ce langage vous donnera un peu de courage.
        </p>

        <div class="box">
            <h4>Le texte et le paragraphe</h4>
            <p>Il va de soi qu'un site web ou une application sans texte ne sert à grand-chose... <br>
                Pour autant, il existe beaucoup de façons d'écrire son texte et de le mettre en forme pour lui donner une belle apparence et donner envie au lecteur de continuer.
            </p>
            <br>
            <pre class="brush:html">
                <p>Cette balise permet d'écrire du texte simplement avec une mise en forme "automatique"</p>

                <p>Ajouter cette balise <br>
                    pour sauter une ligne</p>

                <span>Cette balise permet d'écrire du texte sans sauter les lignes</span>

                <a href="#">Pour rajouter des liens dans votre site web</a>
            </pre>
            <br>
            <p>Vous avez donc une série de balises qui permettent d'afficher du texte sous différentes présentations et façons. <br>
                Ceci est une liste non exhaustive bien évidemment. Je vous invite à aller voir une référence dans la documentation des langages sur <a href="#">Devdoc.io</a>. Vous y trouverez réellement une multitude de langages et donc votre bonheur.</p>
            <p>Donc pour résumer sur le texte :</p>
            <div class="left-align">
                <blockquote>
                    - La balise <span class="teal-text">&lt;P&gt;</span> permet d'afficher du texte de façon très simple et permet de revenir à la ligne à la fin d'un bloc automatiquement.
                    <br>
                    - La balise <span class="teal-text">&lt;BR&gt;</span> permet de sauter des lignes, vous pouvez donc la placer librement dans une phrase pour effectuer un retour à la ligne.
                    <br>
                    - La balise <span class="teal-text">&lt;span&gt;</span> permet d'afficher du texte de manière simple mais sans retour à la ligne, donc très efficace dans certaines situations.
                    <br>
                    - La balise <span class="teal-text">&lt;a&gt;</span> permet quant à elle de créer un lien en surbrillance qui pourra envoyer l'utilisateur dans une autre partie du site web ou simplement vers un autre site. <br>
                    Elle peut aussi permettre à l'utilisateur de télécharger un fichier, pdf, images, vidéo ...
                    <pre class="brush:html">
                        <a href="/images/MonImages.jpeg" download="Mon_images.pjeg">Télécharger ici</a>
                    </pre>
                    <a href="{{asset('images/html2.png')}}" download="html12.png">Télécharger ici</a>
                </blockquote>
                <br>
            </div>
            <p>Voici une rapide présentation des principales balises de texte que vous utiliserez très souvent </p>
        </div>

        <br>
        <p class="teal-text"> Maintenant vous savez comment faire un titre et écrire du texte. <br>
            C'est bien, mais il faut bien englober tout ce bazar, non ?</p>
        <br>
        <div class="box">
            <h4>Les conteneurs</h4>
            <br>
            <p>Vous n'êtes pas sans savoir qu'un site web n'est rien d'autre qu'une arborescence de sections et de parties assemblées pour ressembler à quelque chose. <br>
                Rien de bien compliqué, il faut juste être organisé et méthodique (ça s'apprend), mais voyons comment ça marche :
            </p>
            <br>
            <pre class="brush:html">
                <div>Un conteneur simple mais efficace</div>
                <section>Une section pour chaque catégorie</section>
                <footer>Pied de page</footer>
                <main>Éventuellement un corps de page</main>
                <head>Et un en-tête</head>
            </pre>
            <p>Alors pas où commencer... déjà votre structure de site devrait ressembler à quelque chose comme ça :</p>
            <img height="300" src="{{asset('images/htmlcapture.png')}}" loading="lazy" alt="">
            <p>On peut donc voir la structure, même le squelette, de la page HTML la plus basique, et on va décortiquer ça un peu ensemble
                <div class="left-align">
                    <blockquote>
                        - Le <span class="teal-text">&lt;Doctype&gt;</span> permet de définir le type de document sur lequel on va travailler. <br>
                        - Le <span class="teal-text">&lt;html&gt;</span> va définir le langage utilisé. <br>
                        - Le <span class="teal-text">&lt;head&gt;</span> va définir l'entête qui ne sera pas visible, elle va donc servir à mettre les liens d'autres langages, des métadonnées... <br>
                        - Le <span class="teal-text">&lt;title&gt;</span> va définir le titre de la page, ce sera le seul et unique par fichier HTML. <br>
                        - Le <span class="teal-text">&lt;body&gt;</span> quant à lui va définir le corps de la page et tout ce qui sera visible par l'utilisateur. <br>
                    </blockquote>
                </div>
            </p>
        </div>

        <br>
        <p class="teal-text"> Bon, nous avons déjà vu la structure principale de notre projet, maintenant nous allons compléter tout ça avec les listes, les images, et les tableaux.</p>
        <br>
        <div class="box">
            <h4>Liste ordonnée ou liste désordonnée</h4>
            <p>Les listes sont extrêmement utiles pour les nav-bars ou pour lister tout un tas d'objets, voici leur structure :</p>
            <br>
            <pre class="brush:html">
                <ul>
                    <li>Objet 1</li>
                    <li>Objet 2</li>
                    <li>Objet 3...</li>
                </ul>
            </pre>
            <br>
            <p>Le &lt;ul&gt; se traduit par Unordered List, donc on va pouvoir y présenter des objets n'ayant aucun lien d'ordre entre eux. Cette liste est la plus utilisée à mon sens car elle ne présente presque aucun inconvénient d'utilisation. </p>
            <br>
            <pre class="brush:html">
                <ol>
                    <li>Objet 1</li>
                    <li>Objet 2</li>
                    <li>Objet 3</li>
                </ol>
            </pre>
            <br>
            <p>Vous l'aurez deviné, &lt;ol&gt; se traduit par Ordered List, donc on utilisera cette liste pour avoir un lien entre les objets. Petit exemple :</p>
            <br>
            <pre class="brush:html">
                <ul>
                    <li>Cuisine</li>
                    <li>Ingrédients</li>
                    <li>
                        <ol>
                            <li>Sel</li>
                            <li>Poivre</li>
                            <li>Cumin</li>
                        </ol>
                    </li>
                </ul>
            </pre>
            <br>
            <p>Comme on peut le constater, nous avons une &lt;ul&gt; qui liste deux objets "Cuisine et Ingrédients" et on peut voir que "Ingrédients" est lié avec une &lt;ol&gt; qui a un impact sur l'ordre des éléments qu'elle contient.</p>
        </div>
        <div class="box">
                    <h4>Insertion d'images</h4>
            <p>L'insertion d'images et de vidéos est le cœur principal du design de votre site, crucial pour l'immersion de vos lecteurs. Il est donc important de savoir insérer les images dans le bon format et la bonne taille pour ne pas altérer l'expérience utilisateur.
                <br>
                Commençons par les images. Pour insérer une image, nous allons utiliser la balise &lt;img&gt;, qui nous permet d'inclure différentes options telles que le chemin de l'image, la taille, le chargement paresseux (lazy loading)...
            </p>
            <br>
            <pre class="brush:html">
                <img src="/img/Monimage.jpg" alt="ImageNonAffichee" loading="lazy" height="300" width="500">
            </pre>
            <br>
            <p>Beaucoup de paramètres, mais c'est plutôt simple, <br> </p>
            <p>
                1) <span class="red-text">"src"</span>, acronyme de source, permet de définir la source de l'image ou le chemin pour que votre site puisse afficher l'image.
            </p>
            <br>
            <img height="300" src="{{asset('/images/html2.png')}}" alt="image_html" loading="lazy">
            <br>
            <p>
                Pour aller chercher l'image, nous devons nous situer dans le dossier "Site web". Ainsi, nous le spécifions comme suit :
            </p>
            <br>
            <pre class="brush:html">
                <img src="./site web/images/notreimage.jpeg" alt="">
            </pre>
            <br>
            <p>
                Le "./" signifie que nous partons de la racine du dossier, "/" signifie que nous entrons dans le dossier suivant. Avec cette méthode, nous pouvons accéder à n'importe quel type de dossier, peu importe son emplacement.
            </p>
            <br>
            <p class="teal-text">Pour plus de précision, consultez la section BASH</p>
            <br>
            <p>
                2) <span class="red-text">"alt"</span> sert au cas où votre site n'affiche pas l'image. Cela permet d'avoir un petit texte décrivant l'image (et améliorant le référencement SEO).
            </p>
            <br>
            <p>
                3) <span class="red-text">"loading"</span> permet de donner une directive au navigateur. Imaginons que vous créiez un site de partage d'images. Si vous affichez toutes les images d'un coup, votre application sera extrêmement lente et gâchera l'expérience utilisateur. "loading=lazy" permet de charger les images pendant le chargement du site ou après.
            </p>
            <br>
            <p>
                4) <span class="red-text">"Height"/"Width"</span> Évidemment, votre site contiendra des images de tailles différentes en fonction de la dimension de la page de votre utilisateur. "Height" vous permet de donner une hauteur et "Width" une largeur à votre image.
            </p>
        </div>
</div>


<style>
    p{
        margin-top: 30px;
    }
    h4{
        margin-top: 20px;
    }
    .box{
        margin-top: 50px !important;
    }
    @media screen and (max-width: 900px) {
   
  img{
    height: 200px;
    width: 400px;
  }

 }
</style>
@endsection