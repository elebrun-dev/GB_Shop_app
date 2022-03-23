@extends('layout.template')

@section('title',"Games Bond, spécialiste des jeux vidéos")

@section('content')

    
<div class="home container-fluid">
 
    <div class="accroche">
        <div class="clavier">
            <img id="clavier" src="/images/clavier.png" alt="photo_clavier" />
        </div>
        <div>
            <h2>
                Games Bond <br /> le <span> spécialiste </span> des <span> jeux vidéos </span>
            </h2>
            <p>
                Trouver votre bonheur parmi les meilleurs jeux du moment et pour ne rater aucune info,
                <span> <br /> inscrivez-vous à notre newsletter! </span> <br />
                <button type="button" class="btn btn-dark">Newsletter</button>
            </p>
        </div>
    </div>

    <div class="container_cat">

        <div class="catalogue">
            <h2>Notre catalogue complet</h2>
            <a href="Catalogue.html"><img src="/images/maincat.jpg" alt="Icone Catalogue" /></a>
        </div>


        <h2>Par univers</h2>
        <div class="univers">
            <div class="row">
                <figure class="cat col-12 col-md-3">
                    <a href="Catalogue_Action.html"><img src="/images/Halo.jpg" alt="Icone Action" /></a>
                    <figcaption>Action</figcaption>
                </figure>

                <figure class="cat col-12 col-md-3">
                    <a href="Catalogue_Sport.html"><img src="/images/NHL.jfif" alt="Icone Sport" /></a>
                    <figcaption>Sport</figcaption>
                </figure>

                <figure class="cat col-12 col-md-3">
                    <a href="Catalogue_Strategie.html"><img src="/images/Civilization.jpg" alt="Icone Strategie" /></a>
                    <figcaption>Stratégie</figcaption>
                </figure>
                <figure class="cat col-12 col-md-3">
                    <a href="Catalogue_RPG.html"><img src="/images/TheWitcher.jpg" alt="Icone RPG" /></a>
                    <figcaption>RPG</figcaption>
                </figure>
            </div>
        </div>
    </div>
</div>

@endsection