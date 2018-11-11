@extends('base')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>{{ $title }}</h1>
                    <span class="subheading">{{ $description }}</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach ($posts as $post)
                <div class="post-preview">
                    <a href="{{ $post['path'] }}">
                        <h2 class="post-title">
                            {!! $post['title'] !!}
                        </h2>
                        <h3 class="post-subtitle">
                            {!! $post['trimmedText'] !!}
                        </h3>
                    </a>
                </div>
                <hr>
            @endforeach

            @if($pagination)
                <div class="clearfix">
                    @if($prev)
                        <a class="btn btn-primary" href="{{ $prev }}">Newer Posts</a>
                    @endif
                    @if ($next)
                        <a class="btn btn-primary float-right" href="{{ $next }}">Older Posts</a>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
@endsection