@extends('SP.main_SP')

@section('title')
    Low kik || Католог
@endsection

@section('content')
<div class="cars-container">
  <div class="container-xxl" id="container-cars">
    <div class="row">
      <div class="col-12 d-flex flex-wrap justify-content-center">
        <h1>Автомобили для аренды</h1>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 g-4 my-0 cars" id="cars">




    <div class="col">
        <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
            <h2><span itemprop="name">TOYOTA PASSO, 2010</span></h2>
            <img itemprop="image" src="/rent_V2/media/cars/passo.png" class="card-img-top" loading="lazy" alt="Фото автомобиля">
            <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="card-body">
                <p>
                <small>
                    Суток: 1 <br>
                    Цена в сутки: 950 руб.
                </small>
                </p>
                <p class="card-text">
                    Цена: <span itemprop="price">950</span> <span itemprop="priceCurrency" content="RUB">руб</span>.
                </p>
                <a href="">Подробнее</a>
                <a href="/tovar/1">
                    <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modal1" car="TOYOTA PASSO, 2010" car_id="175">
                        Заказать
                    </button>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
            <h2><span itemprop="name">TOYOTA CAMRY, 2005</span></h2>
            <img itemprop="image" src="/rent_V2/media/cars/camry_2005.png" class="card-img-top" loading="lazy" alt="Фото автомобиля">
            <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="card-body">
                <p>
                <small>
                    Суток: 1 <br>
                    Цена в сутки: 1300 руб.
                </small>
                </p>
                <p class="card-text">
                    Цена: <span itemprop="price">1300</span> <span itemprop="priceCurrency" content="RUB">руб</span>.
                </p>
                <a href="">Подробнее</a>
                <a href="/tovar/2">
                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modal1" car="TOYOTA CAMRY, 2005" car_id="110">
                    Заказать
                </button>
            </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
            <h2><span itemprop="name">TOYOTA TOYOTA PREMIO, 2010</span></h2>
            <img itemprop="image" src="/rent_V2/media/cars/premio_2012.png" class="card-img-top" loading="lazy" alt="Фото автомобиля">
            <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="card-body">
                <p>
                <small>
                    Суток: 1 <br>
                    Цена в сутки: 1600 руб.
                </small>
                </p>
                <p class="card-text">
                    Цена: <span itemprop="price">1600</span> <span itemprop="priceCurrency" content="RUB">руб</span>.
                </p>
                <a href="">Подробнее</a>
                <a href="/tovar/3">
                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modal1" car="TOYOTA TOYOTA PREMIO, 2010" car_id="142">
                    Заказать
                </button>
            </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
            <h2><span itemprop="name">TOYOTA COROLLA, 2010</span></h2>
            <img itemprop="image" src="/rent_V2/media/cars/corolla_2010.jpg" class="card-img-top" loading="lazy" alt="Фото автомобиля">
            <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="card-body">
                <p>
                <small>
                    Суток: 1 <br>
                    Цена в сутки: 1800 руб.
                </small>
                </p>
                <p class="card-text">
                    Цена: <span itemprop="price">1800</span> <span itemprop="priceCurrency" content="RUB">руб</span>.
                </p>
                <a href="">Подробнее</a>
                <a href="/tovar/4">
                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modal1" car="TOYOTA COROLLA, 2010" car_id="146">
                    Заказать
                </button>
            </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
            <h2><span itemprop="name">NISSAN TIIDA, 2011</span></h2>
            <img itemprop="image" src="/rent_V2/media/cars/nissan_tiifa.jpg" class="card-img-top" loading="lazy" alt="Фото автомобиля">
            <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="card-body">
                <p>
                <small>
                    Суток: 1 <br>
                    Цена в сутки: 1900 руб.
                </small>
                </p>
                <p class="card-text">
                    Цена: <span itemprop="price">1900</span> <span itemprop="priceCurrency" content="RUB">руб</span>.
                </p>
                <a href="">Подробнее</a>
                <a href="/tovar/5">
                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modal1" car="NISSAN TIIDA, 2011" car_id="173">
                    Заказать
                </button>
            </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
            <h2><span itemprop="name">HYUNDAI SOLARIS, 2012</span></h2>
            <img itemprop="image" src="/rent_V2/media/cars/53746b93140ff_aHHmPbW.jpg" class="card-img-top" loading="lazy" alt="Фото автомобиля">
            <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="card-body">
                <p>
                <small>
                    Суток: 1 <br>
                    Цена в сутки: 2200 руб.
                </small>
                </p>
                <p class="card-text">
                    Цена: <span itemprop="price">2200</span> <span itemprop="priceCurrency" content="RUB">руб</span>.
                </p>
                <a href="">Подробнее</a>
                <a href="/tovar/6">
                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modal1" car="HYUNDAI SOLARIS, 2012" car_id="172">
                    Заказать
                </button>
                </a>
            </div>
        </div>
    </div>

    <div class="col">
        <div itemscope="" itemtype="https://schema.org/Product" class="card h-100 text-center shadow">
            <h2><span itemprop="name">NISSAN TERRANO, 2016</span></h2>
            <img itemprop="image" src="/rent_V2/media/cars/nissan-terrano-6.png" class="card-img-top" loading="lazy" alt="Фото автомобиля">
            <div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer" class="card-body">
                <p>
                <small>
                    Суток: 1 <br>
                    Цена в сутки: 2400 руб.
                </small>
                </p>
                <p class="card-text">
                    Цена: <span itemprop="price">2400</span> <span itemprop="priceCurrency" content="RUB">руб</span>.
                </p>
                <a href="">Подробнее</a>
                <a href="/tovar/7">
                <button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#modal1" car="NISSAN TERRANO, 2016" car_id="144">
                    Заказать
                </button>
                </a>
            </div>
        </div>
    </div>


</div>
  </div>
</div>
@endsection