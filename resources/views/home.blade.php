@extends('layouts.app')

@section('title', 'Bienvenue sur le site officiel de AZA')

@section('content')
<!--LAST PUBLICATION-->
    <section class="gray-bg kode-best-sellter-sec">
        <div class="container">
            <!--SECTION CONTENT START-->
            <div class="section-content">
                <h2>Dernières <span>publications</span></h2>
                <p>
                    Retrouvez ici les dernières publications écrit en asa par nos différents auteurs.
                </p>
            </div>
            <!--SECTION CONTENT END-->
            <div class="row">
                <!--PRODUCT GRID START-->
                @foreach ($books as $book)
                    <div class="col-md-3">
                    <div class="best-seller-pro">
                        <figure>
                            <img src="{{ asset('uploads/'.$book->couverture) }}" alt="">
                        </figure>
                        <div class="kode-text">
                            <h3>{{ $book->title }}</h3>
                        </div>
                        <div class="kode-caption">
                            <h3>{{ $book->author->name }}</h3>
                            <p> {{ \Carbon\Carbon::parse( $book->date_publication)->format('d/m/Y h:i:s')}} </p>
                            <p class="price">
                                {{ $book->category->name }}
                            </p>
                            <a href="{{ route("showBook", $book->id) }}" class="add-to-cart">
                                En savoir plus
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--PRODUCT GRID END-->
                
            </div>	
        </div>
    </section>
<!--TOP SELLERS SECTION END-->
@endsection