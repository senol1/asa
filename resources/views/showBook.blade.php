@extends('layouts.app')

@section('title', $book->title)

@section('banner')
    @include("layouts.banner_book")
    <style>
        #the-canvas {
            border: 1px solid black;
            direction: ltr;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
                <div class="col-md-3 sidebar">
                	<!--SEARCH WIDGET START-->	
                    <div class="widget widget-search">
                    	<h2>Rechercher une publication</h2>
                    	<div class="input-container">
                    		<input type="text" placeholder="Entre un mot-clé">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                    <!--SEARCH WIDGET END-->
                    <!--CATEGORY WIDGET START-->
                    <div class="widget widget-categories">
                    	<h2>Catégories</h2>
                        <ul>
                            @foreach ($categories as $category)
                                <li><a href="#">{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!--CATEGORY WIDGET END-->
                </div>
                <div class="col-md-9">
                    <!--BOOK DETAIL START-->
                    <div class="lib-book-detail">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="kode-thumb">
                                    <img src="{{ asset('uploads/'.$book->couverture) }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="kode-text">
                                	<h2>{{ $book->title }}</h2>
                                    <div class="product-review">
                                        <p>4 Commentaires</p>
                                    </div>
                                    <div class="product-price">
                                        <p>Auteur : <span class="color">{{ $book->author->name }}</span></p>
                                    </div>
                                    <div class="book-text">
                                    	<p>
                                            {!! $book->resume !!}
                                        </p>
                                    </div>
                                    <div class="book-text">
                                    	<p>Categorie: {{ $book->category->name }}.</p>
                                        <p>Author: {{ $book->author->name }}</p>
                                        <p>Publié le: {{ \Carbon\Carbon::parse( $book->date_publication)->format('d/m/Y h:i:s')}}</p>
                                    
                                    </div>
                                    <a class="add-to-cart" type="button" data-toggle="modal" data-target="#myModal">
                                        Lire en ligne
                                    </a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">{{ $book->name }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <canvas id="the-canvas"></canvas>
                                        </div>  
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Quitter</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--BOOK DETAIL END-->
                    <!--PRODUCT REVIEW TABS START-->
                    <div class="product-review-tabs">
                        <!--NAV TABS START-->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Description " aria-controls="Description" role="tab" data-toggle="tab">Description </a></li>
                            <li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Commentaire</a></li>
                        </ul>
                        <!--NAV TABS END-->
                        <!--TAB PANEL START-->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Description">
                                {!! $book->description !!}
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="reviews">
                                <div class="kode-comments">
                                    <ul>
                                        <li>
                                            <div class="kode-thumb">
                                                <a href="#"><img alt="" src="images/author14.png"></a>
                                            </div>
                                            <div class="kode-text">
                                                <h4>Saul Bellow</h4>
                                                <p class="designation">JUNE 20, 2015</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                <a class="reply" href="#">Reply</a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="kode-thumb">
                                                <a href="#"><img alt="" src="images/author14.png"></a>
                                            </div>
                                            <div class="kode-text">
                                                <h4>Saul Bellow</h4>
                                                <p class="designation">JUNE 20, 2015</p>
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                                                <a class="reply" href="#">Reply</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>                        
                            </div>
                        </div>
                        <!--TAB PANEL END-->
                    </div>
                    <!--PRODUCT REVIEW TABS END-->
                    <!--RELATED PRODUCTS START-->
                    <div class="lib-related-products">
                        <h2>Publications similaires</h2>
                        <div class="row">
                            <!--PRODUCT GRID START-->
                            @foreach ($book->category->books()->where("id", "<>", $book->id)->limit(4)->get() as $b)
                                <div class="col-md-4">
                                <div class="best-seller-pro">
                                     <figure>
                            	<img src="{{ asset('uploads/'.$b->couverture) }}" alt="">
                            </figure>
                            <div class="kode-text">
                            	<h3><a href="{{ route("showBook", $b->id) }}">{{ $b->title }}</a></h3>
                            </div>
                            <div class="kode-caption">
                            	<h3>{{ $b->title }}</h3>

                                <p>{{ $b->author->name }}</p>
                                <p class="price">
                                    {{ $b->category->name }}
                                </p>
                                <a href="{{ route("showBook", $b->id) }}" class="add-to-cart">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            <!--PRODUCT GRID END-->
                        </div>
                    </div>
                    <!--RELATED PRODUCTS END-->
                </div>
            </div>
    </div>

    
@endsection

@section("javascripts")
    @parent
    <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script>
        // If absolute URL from the remote server is provided, configure the CORS
        // header on that server.
        var url = "{{ asset('uploads/'.$book->pdf) }}";

        // Loaded via <script> tag, create shortcut to access PDF.js exports.
        var pdfjsLib = window['pdfjs-dist/build/pdf'];

        // The workerSrc property shall be specified.
        pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

        // Asynchronous download of PDF
        var loadingTask = pdfjsLib.getDocument(url);
        loadingTask.promise.then(function(pdf) {
        console.log('PDF loaded');
        
        // Fetch the first page
        var pageNumber = 1;
        pdf.getPage(pageNumber).then(function(page) {
            console.log('Page loaded');
            
            var scale = 1.5;
            var viewport = page.getViewport({scale: scale});

            // Prepare canvas using PDF page dimensions
            var canvas = document.getElementById('the-canvas');
            var context = canvas.getContext('2d');
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
            canvasContext: context,
            viewport: viewport
            };
            var renderTask = page.render(renderContext);
            renderTask.promise.then(function () {
            console.log('Page rendered');
            });
        });
        }, function (reason) {
        // PDF loading error
        console.error(reason);
        });
    </script>
@endsection