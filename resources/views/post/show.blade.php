@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8 mb-4">

                <!-- Title -->
                <h1 class="mt-4">{{ $post->title }}</h1>

                <hr>

                <!-- Date/Time -->
                <p>Posted on {{ $post->published_at }}</p>

                <hr>

                <!-- Preview Image -->
                <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead">{{ $post->summary }}</p>

                {!! $post->body !!}

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4">

                @include('partials.search-widget')

                @include('partials.category-widget')

                @include('partials.side-widget')

            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    @include('partials.footer')

@endsection