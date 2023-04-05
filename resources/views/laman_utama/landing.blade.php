@extends('layouts.base')

@section('sambungan')

    <div class="col-12">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_1280.jpg" class="d-block w-100 vh-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://cdn.pixabay.com/photo/2019/12/04/18/53/kuala-lumpur-4673407_1280.jpg" class="d-block w-100 vh-50" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="https://cdn.pixabay.com/photo/2020/06/18/16/24/skyline-5314163_1280.jpg" class="d-block w-100 vh-50" alt="...">
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

    {{-- <div class="row">
        <div class="col-3">
            Program
        </div>
        <div class="col-4">
            <img src="/img/group_12.jpg" class="center" style="" alt="testing">
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
    </div> --}}
    <div class="col mt-2 mb-2 text-center">
        <img src="/img/group_12.jpg" alt="">
    </div>

    <div class="card" style="background-color: #312C82">
        <div class="col" style="margin-left: 3em;margin-right:3em;margin-top:3em;margin-bottom:3em">
            <div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <div class="row">
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_1280.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2019/12/04/18/53/kuala-lumpur-4673407_1280.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2020/06/18/16/24/skyline-5314163_1280.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row">
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_1280.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2019/12/04/18/53/kuala-lumpur-4673407_1280.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2020/06/18/16/24/skyline-5314163_1280.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <div class="row">
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_1280.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2019/12/04/18/53/kuala-lumpur-4673407_1280.jpg" class="d-block w-100 vh-50" alt="...">
                            </div>
                            <div class="col-4">
                                <img src="https://cdn.pixabay.com/photo/2020/06/18/16/24/skyline-5314163_1280.jpg" class="d-block w-100 vh-50" alt="...">
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
    <div class="col mt-2 mb-2 text-center">
        <img src="/img/Group_17.png" alt="">
    </div>
    <div class="col" style="margin-left: 3em;margin-right:3em;margin-top:3em;margin-bottom:3em">
        <div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="row">
                        <div class="col-4">
                            <div class="card">
                                <h2 class="text-center">Part 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius debitis maxime consequuntur ab, sit corporis veniam molestias molestiae fugiat aliquid accusamus ipsa, iusto itaque, eligendi quos voluptatum. Voluptatem, provident delectus.</p>
                            </div>
                            {{-- <img src="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_1280.jpg" class="d-block w-100 vh-50" alt="..."> --}}
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <h2 class="text-center">Part 2</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae sed tenetur ratione, delectus vitae doloribus soluta similique eum consectetur quisquam perspiciatis corporis dolor, nostrum illum voluptatem, voluptate odio ipsa repellendus!</p>
                            </div>
                            {{-- <img src="https://cdn.pixabay.com/photo/2019/12/04/18/53/kuala-lumpur-4673407_1280.jpg" class="d-block w-100 vh-50" alt="..."> --}}
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <h2 class="text-center">Part 3</h2>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea, ipsum. Recusandae illo unde explicabo dolorum sint praesentium deserunt sapiente, inventore, ea quos dolor veniam nemo eos temporibus est facilis eveniet.</p>
                            </div>
                            {{-- <img src="https://cdn.pixabay.com/photo/2020/06/18/16/24/skyline-5314163_1280.jpg" class="d-block w-100 vh-50" alt="..."> --}}
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="row">
                        <div class="col-4">
                            <img src="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_1280.jpg" class="d-block w-100 vh-50" alt="...">
                        </div>
                        <div class="col-4">
                            <img src="https://cdn.pixabay.com/photo/2019/12/04/18/53/kuala-lumpur-4673407_1280.jpg" class="d-block w-100 vh-50" alt="...">
                        </div>
                        <div class="col-4">
                            <img src="https://cdn.pixabay.com/photo/2020/06/18/16/24/skyline-5314163_1280.jpg" class="d-block w-100 vh-50" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <div class="row">
                        <div class="col-4">
                            <img src="https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_1280.jpg" class="d-block w-100 vh-50" alt="...">
                        </div>
                        <div class="col-4">
                            <img src="https://cdn.pixabay.com/photo/2019/12/04/18/53/kuala-lumpur-4673407_1280.jpg" class="d-block w-100 vh-50" alt="...">
                        </div>
                        <div class="col-4">
                            <img src="https://cdn.pixabay.com/photo/2020/06/18/16/24/skyline-5314163_1280.jpg" class="d-block w-100 vh-50" alt="...">
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
@endsection
