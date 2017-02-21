@extends('layout')
@section('content')
<div class="grid-container">
    <div class="grid-100 grid-parent container">
        <div class="grid-100 grid-parent panel">
            <div class="grid-25 thumb">
                <a href="#">
                    <div class="thumb-container">
                        <img src="images/banner.png" alt="banner">
                        <div class="category">Actu</div>
                        <div class="count">12</div>
                    </div>
                </a>
            </div>
            <div class="grid-75 content">
                <h2><a href="#">Titre de ma news</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nesciunt tenetur quaerat sequi praesentium possimus adipisci at. Itaque praesentium, voluptatibus nemo laborum quod tenetur, et inventore officia iusto assumenda quo?</p>
                <span class="auteur">Il y a 2 heures par Ivan Biedermann</span>
            </div>
        </div>
        <div class="grid-100 grid-parent panel">
            <div class="grid-25 thumb">
                <a href="#">
                    <div class="thumb-container">
                        <img src="images/first.jpg" alt="banner">
                        <div class="category">Manga</div>
                        <div class="count">12</div>
                    </div>
                </a>
            </div>
            <div class="grid-75 content">
                <h2><a href="#">Une deuxième news cette fois sur la technologie</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nesciunt tenetur quaerat sequi praesentium possimus adipisci at. Itaque praesentium, voluptatibus nemo laborum quod tenetur, et inventore officia iusto assumenda quo?</p>
                <span class="auteur">Il y a 1 heures par Ivan Biedermann</span>
            </div>
        </div>
        <div class="grid-100 grid-parent panel">
            <div class="grid-25 thumb">
                <a href="#">
                    <div class="thumb-container">
                        <img src="images/banner.jpg" alt="banner">
                        <div class="category">Bon plans</div>
                        <div class="count">12</div>
                    </div>
                </a>
            </div>
            <div class="grid-75 content">
                <h2><a href="#">Une autre news pour le fun histoire de voir comment ça réagis !</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nesciunt tenetur quaerat sequi praesentium possimus adipisci at. Itaque praesentium, voluptatibus nemo laborum quod tenetur, et inventore officia iusto assumenda quo?</p>
                <span class="auteur">Il y a 30 minutes par Ivan Biedermann</span>
            </div>
        </div>
</div>
@stop