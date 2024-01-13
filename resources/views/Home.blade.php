@extends('Base')
@section('title','Accueil')
@section('content')

<div class="container headline">
    <h1>Apprendre a coder n'a jamais étais aussi simple</h1>
</div>

<div class="container box center-align headline">
    <h2>Html ou Markup-language</h2>
    <p>Un language dit de "balisage" qui constitue la base de notre site ou application web,<br>
      il se constitue de multitude de balise qui permettent de structurer votre interface.
      voyons cella rapidement: <br>
    </p>
        <div class="container">
            <pre class="brush:html">
         <h1>Titre de page unique</h1>
         <h2>second titre de page</h2>
         <h3>Troisième titre de page</h3>
         <h4>quatrièmes titre de page</h4>
            </pre>
        </div>
        <p>ce qui nous donnera donc un deux titre de taille différente, <br>
        vous pouvez ainsi aller jusqu'a H6 pour les titre.
        </p>
        <p>
            Mais ce n'es qu'une infime partie du HTML qui contient plusieur dizaines de balises différentes.
            Je vous proposent donc de rejoindre le cours dédier pour en savoir plus.
        </p>
        <a class="waves-effect waves-dark teal lighten-2  btn"><i class="material-icons left">add</i>En savoir plus...</a>
        <p class="left-align grey-text lighten-2 ">*Nécéssite un compte membres</p>

</div>

<div class="container box center-align headline">
    <h2>CSS ou Cascading Style Sheet</h2>
    <p>Un language de style qui de traduit en français par "feuille de style en cascade", ce seras donc un "language" qui permettras de mettre un peut de couleur et de forme dans votre projet.

    </p>
        <div class="container">
            <pre class="brush:css">
                h1{
                    color: #ffffff;
                }
                h2{
                    background-color: black;
                }
            </pre>
        </div>
        <p>Pour le style vous utiliser d'autre balise diférentes du HTML, <br>
        la seul limites seras votre imagination.
        </p>
        <p>
            Le CSS vous offrent une infinité de combinaison et de style diférents. <br>
            Pour en profité et découvrir tout les avantages du css rejoigner la formation !
        </p>
        <a class="waves-effect waves-dark teal lighten-2 btn"><i class="material-icons left">add</i>En savoir plus...</a>
        <p class="left-align grey-text lighten-2">*Nécéssite un compte membres</p>
</div>

<div class="container mt center-align headline">
    <h3>Avancer et apprendre a son rythme</h3>
    <p style="font-size: 1.3em;">Avec grande prudence, et beacuoup de patience chacun avance a son rythme c'est pourquoi nous vous proposont la seul formule 100% gratuite a vie qui vous aideras à avancer dans vos projet, il vous suffis simplement de vous créer un compte membres et nous nous occupons du reste !</p>
</div>

<div class="container mt center-align headline">
<h3>Un début et une avancer sans fin...</h3>
<p style="font-size: 1.3em;">Démmarer avec de simple language de balisage et apprenais a maitriser des language de programation pas à pas avec nous et a votre rythme.</p>
</div>
@endsection