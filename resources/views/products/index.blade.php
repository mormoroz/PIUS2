@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
            <form class="d-flex" action="/products">
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
            <x-flash-message />
            <div class="row my-5" name="products_index">
                @unless(count($products) == 0)

                    @foreach($products as $product)
                        <div class="col-md-4 col-sm-6 p-3">
                            <div class="card rounded-3 p-1">
                                <div class="card-body">
                                    <div class="product_title">
                                        <p class="h2">{{$product->product_name}}</p>
                                    </div>
                                    <div class="border rounded-1 bg p-1 my-4 bg-cc-lighter">
                                        <div class="row">
                                            <p class="h4"><strong>Код:</strong><span class="h4 m-2"><strong>{{$product->code}}</strong></span></p>
                                            <p class="h6">Цена:<span class="h6 m-2">{{$product->price}}</span></p>
                                            <p class="h6">Количество:<span class="h6 m-2">{{$product->count}}</span></p>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-primary btn-sm stretched-link" data-bs-toggle="modal" data-bs-target="#addModal" data-bs-productID="{{$product->product_id}}">Подробнее</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>ERROR 404</p>
                @endunless
            </div>
        </div>
{{--        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">--}}
{{--            <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="exampleModalLabel">Добавить</h5>--}}
{{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <form action="/meal" method="post" >--}}
{{--                            @csrf--}}
{{--                            <input type="hidden" id="product_id" name="product_id">--}}
{{--                            <div class="mb-3">--}}
{{--                                <label for="mass_factor" class="col-form-label">Количество (в граммах):</label>--}}
{{--                                <input type="text" class="form-control" id="mass_factor" name="mass_factor">--}}
{{--                            </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="meal_time">--}}
{{--                                    <option selected="">Время приема</option>--}}
{{--                                    <option value="0">Завтрак</option>--}}
{{--                                    <option value="1">Обед</option>--}}
{{--                                    <option value="2">Ужин</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="mb-3">--}}
{{--                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>--}}
{{--                                <button type="submit" class="btn btn-primary">Добавить</button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    </div>
{{--    <img class="card-img-top" src="{{ Vite::asset('resources/icons/iPhone-9.png') }}">--}}
    @vite(['resources/js/products.index.js'])

@endsection
