@extends('layoutadmin')
@section('content')

    <div class="wallpaper">
        <div class="opacity">
            <div class="grid-container">
            <h1 class="admin-title">Connexion</h1>
                <form action="/admin" method="post" class="grid-30 prefix-35 suffix-35 mobile-grid-100 tablet-grid-100 admin-form">
                    {{ csrf_field() }}
                    <input type="mail" name="mail" class="grid-100 mobile-grid-100 tablet-grid-100" placeholder="Adresse e-mail...">
                    <input type="password" name="password" class="grid-100 mobile-grid-100 tablet-grid-100" placeholder="Mot de passe...">
                    <button type="submit">Connexion</button>
                </form>
            </div>
        </div>
    </div>

@stop