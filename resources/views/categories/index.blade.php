@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="container">
                        <form class="d-flex" action="/category">
                            <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
            <x-flash-message />
            <div class="row my-5" name="categories_index">
                @unless(count($categories) == 0)

                    @foreach($categories as $category)
                        <div class="col-md-4 col-sm-6 p-3">
                            <div class="card rounded-3 p-1">
                                <div class="card-body">
                                    <div class="product_title">
                                        <p class="h2">{{$category->category_name}}</p>
                                    </div>
                                    <div class="border rounded-1 bg p-1 my-4 bg-cc-lighter">
                                        <div class="row">
                                            <p class="h4"><strong>Код:</strong><span class="h4 m-2"><strong>{{$category->code}}</strong></span></p>
                                            <p class="h6">Активность:<span class="h6 m-2">{{$category->active}}</span></p>
                                            <p class="h6">Родительская категория:<span class="h6 m-2">{{$category->parent_category}}</span></p>
                                        </div>
                                    </div>
                                    <a class="btn btn-outline-primary btn-sm stretched-link" href="/category/{{$category->code}}" >Подробнее</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>ERROR 404</p>
                @endunless
            </div>
        </div>
@endsection
