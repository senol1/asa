@extends('layouts.app')


@section('title')
    Familiarisez-vous avec l'alphabet ASA
@endsection

@section('stylesheets')
    @parent
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <style>
        
        @font-face { 
            font-family: ASAFGreniertonclic; src: url('{{ asset('font/ASAFGreniertonclic.ttf') }}');
        }

    </style>
@endsection

@section("content")
    <div class="comment-form">
    <div class="row">
        <input type="text">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 style="font-family: ASAFGreniertonclic">Familiarisez-vous avec l'alphabet ASA</h1>
            <textarea id="editor-old" style="height: 300px; font-family:ASAFGreniertonclic; font-size:32px; background-color:white;" placeholder="Saisissez le texte ici"></textarea>
        </div>
    </div>
</div>
@endsection

@section('javascripts')
    @parent
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' )    )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection