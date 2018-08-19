@extends('layouts.app')

@section('content')
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">A Weblog
                    <small>With Laravel and Knowfox CRUD</small>
                </h1>

                @foreach ($posts as $post)
                    <!-- Blog Post -->
                    <div class="card mb-4">
                        <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
                        <div class="card-body">
                            <h2 class="card-title">{{ $post->title }}</h2>
                            <p class="card-text">{{ $post->summary }}</p>
                            <a href="{{ route('post.show', $post) }}" class="btn btn-primary">Read More &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on {{ $post->published_at }}
                        </div>
                    </div>
                @endforeach

                <!-- Pagination -->
                <div class="d-flex justify-content-center mb-4">
                    {{ $posts }}
                </div>

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