@extends('layouts.base')

@section('sambungan')

    <div class="col-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="/assets/img/photos/unsplash-1.jpg" class="d-block w-100 vh-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/assets/img/photos/unsplash-2.jpg" class="d-block w-100 vh-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="/assets/img/photos/unsplash-3.jpg" class="d-block w-100 vh-50" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            Program
        </div>
        <div class="col-9">
            <div class="card" style="background-color: #312C82; border-radius: 0">
                <div class="row">
                    <div class="col-5">
                        awda
                    </div>
                    <div class="col-7">
                        wdwqd
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            Pengumuman
        </div>
        <div class="col-9">
            <div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="row">
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-1.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-2.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-3.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row">
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-1.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-2.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-3.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row">
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-1.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-2.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="/assets/img/photos/unsplash-3.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval2"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval2"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
@endsection
