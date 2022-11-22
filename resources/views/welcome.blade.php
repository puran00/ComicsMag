@extends('layout.app')
@section('title')
    Главная страница
@endsection
@section('main')
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000" style="background-size: cover; height: 90vh;">
                <img src="http://sun9-84.userapi.com/impf/c840435/v840435371/390e2/PdI0vwvL9MM.jpg?size=604x302&quality=96&sign=a6f0312f81194dd58104ee695a5162e9&type=album" class="d-block w-100 img-fluid" alt="..." style="object-fit: cover">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000" style="background-size: cover; height: 90vh;">
                <img src="https://phantom-marca.unidadeditorial.es/9578a48ea5533ba7ce35280d817c556e/resize/1320/f/jpg/assets/multimedia/imagenes/2022/09/26/16642075528857.jpg" class="d-block w-100 img-fluid" alt="..." style="object-fit: cover">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" style="background-size: cover; height: 90vh;">
                <img src="https://i0.wp.com/www.hanamidango.com/wp-content/uploads/2020/09/One-Piece-988-y-989-Hanami-Dango.png?fit=1770%2C867&ssl=1" class="d-block w-100 img-fluid" alt="..."  style="object-fit: cover">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
