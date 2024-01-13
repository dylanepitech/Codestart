@extends('base')
@section('title','Quizz HTML')

@section('content')
<div class="container center-align">
    <h2>Quizz sur le HTML</h2>
    <p class="teal-text">Le quiz comporte 10 questions, chacune valant un point. Aucun temps imparti, à faire à votre rythme. <br>
    Un score sur 10 sera affiché sur votre page personnelle.</p>

    <div class="row">
        <form class="col s12" action="{{route('Quizzhtml.index')}}" method="post">
    @csrf
        <div class="input-field col s12">
        <p>Quelle est la traduction de l'acronyme HTML ?</p>
            <select name="question1">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">HyperText Markup Language</option>
                <option value="2">HyperText Mokeup Language</option>
                <option value="3">HyperText Minimalist Language</option>
            </select>
                <label>Question 1</label>
            </div>

            <div class="input-field col s12">
            <p>Quelle balise est utilisée pour écrire du texte ?</p>
            <select name="question2">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">&lt;t&gt;</option>
                <option value="2">&lt;p&gt;</option>
                <option value="3">&lt;c&gt;</option>
            </select>
                <label>Question 2</label>
            </div>

            <div class="input-field col s12">
            <p>Quelle balise permet de créer une liste ordonnée ?</p>
            <select name="question3">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">&lt;ul&gt;</option>
                <option value="2">&lt;ol&gt;</option>
                <option value="3">&lt;il&gt;</option>
            </select>
                <label>Question 3</label>
            </div>

            <div class="input-field col s12">
            <p>La balise titre "&lt;h1&gt;" a un nombre d'utilisations limité (recommandé).</p>
            <select name="question4">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">Vrais</option>
                <option value="2">Faux</option>
            </select>
                <label>Question 4</label>
            </div>

            <div class="input-field col s12">
            <p>À quoi sert la balise &lt;br&gt; ?</p>
            <select name="question5">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">Aligner les objets</option>
                <option value="2">Mettre un point</option>
                <option value="3">Sauter une ligne</option>
            </select>
                <label>Question 5</label>
            </div>

            <div class="input-field col s12">
            <p>Pour insérer une image, quelle balise utiliser ?</p>
            <select name="question6">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">&lt;image&gt;</option>
                <option value="2">&lt;img&gt;</option>
                <option value="3">&lt;src&gt;</option>
            </select>
                <label>Question 6</label>
            </div>

            <div class="input-field col s12">
            <p>Quelle balise permet d'ajouter des liens ?</p>
            <select name="question7">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">&lt;e&gt;</option>
                <option value="2">&lt;liens&gt;</option>
                <option value="3">&lt;a&gt;</option>
            </select>
                <label>Question 7</label>
            </div>

            <div class="input-field col s12">
            <p>Quelle balise est utilisée pour générer une liste désordonnée ?</p>
            <select name="question8">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">&lt;il&gt;</option>
                <option value="2">&lt;ul&gt;</option>
                <option value="3">&lt;ol&gt;</option>
            </select>
                <label>Question 8</label>
            </div>

            <div class="input-field col s12">
            <p>Quelle balise est utilisée pour afficher un "pied de page"</p>
            <select name="question9">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">&lt;feet&gt;</option>
                <option value="2">&lt;footer&gt;</option>
                <option value="3">&lt;pied&gt;</option>
            </select>
                <label>Question 9</label>
            </div>

            <div class="input-field col s12">
            <p>Quelle balise est utilisée pour le titre de la page ?</p>
            <select name="question10">
                <option value="" disabled selected>Choisissez votre réponse</option>
                <option value="1">&lt;title&gt;</option>
                <option value="2">&lt;titre&gt;</option>
                <option value="3">&lt;header&gt;</option>
            </select>
                <label>Question 10</label>
            </div>
            <p class="center-align red-text">Avant de valider, vérifiez bien toutes vos réponses.</p>
            <br>
            <button class="btn light-blue waves-effect waves-light" type="submit" name="action">Valider mes réponses
    <i class="material-icons right">send</i>
  </button>
        </form>
    </div>
</div>
@endsection