@extends('layout')
@section('content')
    <div class="banner-post">
        <h2>Une autre news pour le fun histoire de voir comment ça réagis !</h2>
        <div class="category-post">Bon plan</div>
        <div class="creator-post hide-on-mobile">Posté par Ivan Biedermann il y a 2 heures</div>
    </div>
    <div class="grid-container">
        <div class="grid-100 post">
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

            <h2>Header Level 2</h2>

            <ol>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>

            <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

            <h3>Header Level 3</h3>

            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
            <figure>
                <img src="images/first.jpg" alt="overwatch tournament in swiss" width="100%">
                <figcaption>Bannière des tounois suisse d'overwatch à Neuchâtel le 27.03.2017</figcaption>
            </figure>
            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.</p>

            <h2>Header Level 2</h2>

            <ol>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
            </ol>

            <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p></blockquote>

            <h3>Header Level 3</h3>

            <ul>
                <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                <li>Aliquam tincidunt mauris eu risus.</li>
            </ul>
        </div>
        <div class="grid-100 grid-parent share">
            <div class="grid-100 tags">
                <p>
                    <span><a href="#">overwatch</a></span>
                    <span><a href="#">suisse</a></span>
                    <span><a href="#">actualité</a></span>
                </p>
            </div>
            <div class="grid-100 social-share">
                <p>
                    <a href="#" class="social-square twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-square facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-square google-plus"><i class="fa fa-google-plus"></i></a>
                </p>
            </div>  
        </div>
        <div class="grid-100 grid-parent comment">
            <h2 class="section">
                Posté un commentaire
            </h2>

            <form action="#" class="grid-100 grid-parent">
                <input type="text" class="suffix-5 grid-45 mobile-grid-100 tablet-grid-100" placeholder="Pseudo...">
                <input type="mail" class="prefix-5 grid-45 mobile-grid-100 tablet-grid-100" placeholder="Adresse e-mail...">
                <textarea name="content" class="grid-100 mobile-grid-100 tablet-grid-100" placeholder="Contenu du commentaire..."></textarea>
                <button type="submit">Poster</button>
            </form>
            <h2 class="section">
                Commentaires
            </h2>
            <div class="grid-100 grid-parent comments">
                <div class="grid-100 post-comments grid-parent">
                    <div class="grid-10 avatar">
                        <img src="images/avatar.png" alt="Profil image" width="100%">
                    </div>
                    <div class="grid-90 content-comments">
                        <p>
                            <span class="title">par <span class="pseudo">JeanMarmoud</span> il y a 22 minutes</span>
                            <span class="text">Un petit text comme ceci !</span>
                        </p>
                    </div>
                </div>
                <hr>
                <div class="grid-100 post-comments grid-parent">
                    <div class="grid-10 avatar">
                        <img src="images/avatar.png" alt="Profil image" width="100%">
                    </div>
                    <div class="grid-90 content-comments">
                        <p>
                            <span class="title">par <span class="pseudo">JeanMarmoud</span> il y a 22 minutes</span>
                            <span class="text">Un petit text comme ceci !</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop