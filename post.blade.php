@extends('base')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
                <h1>{!! $title !!}</h1>
            </div>
            </div>
        </div>
        </div>
    </header>
    
    <!-- Post Content -->
    <article>
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
            {!! $text !!}
    
            {!! comments !!}
            </div>
        </div>
        </div>
    </article>
  
@endsection