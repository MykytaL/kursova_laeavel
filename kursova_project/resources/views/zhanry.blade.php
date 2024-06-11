@extends('base')

@section('title')Жанри@endsection

@section('base_menu')
    <h1 style="text-align: center; margin-top: 20px">ЖАНРИ</h1>
    <div class="genre-grid">
        <div class="genre-item">
            <h2><a href="#">--> Комедія <--</a></h2>
            <a href="#"><img src="images/comedy.jpg" alt="Фільми жанру Комедія"></a>
        </div>
        <div class="genre-item">
            <h2><a href="/fentesi">--> Фантастика <--</a></h2>
            <a href="/fentesi"><img src="images/fentesi.jpg" alt="Фільми жанру Фантастика"></a>
        </div>
        <div class="genre-item">
            <h2><a href="#">--> Жахи <--</a></h2>
            <a href="#"><img src="images/horror.jpg" alt="Фільми жанру Жахи"></a>
        </div>
        <div class="genre-item">
            <h2><a href="#">--> Бойовик <--</a></h2>
            <a href="#"><img src="images/action.jpg" alt="Фільми жанру Бойовик"></a>
        </div>
        <div class="genre-item">
            <h2><a href="#">--> Мелодрами <--</a></h2>
            <a href="#"><img src="images/romance.jpg" alt="Фільми жанру Мелодрами"></a>
        </div>
        <div class="genre-item">
            <h2><a href="#">--> Містика <--</a></h2>
            <a href="#"><img src="images/mystery.jpg" alt="Фільми жанру Містика"></a>
        </div>
        <div class="genre-item">
            <h2><a href="#">--> Детектив <--</a></h2>
            <a href="#"><img src="images/detective.jpg" alt="Фільми жанру Детектив"></a>
        </div>
    </div>
@endsection
