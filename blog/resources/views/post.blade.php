@extends('layouts.app')

@section('content')

    <!-- Page Header -->
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">

                    <div class="post-heading">
                        <br />
                          <h1><br />
                              {{$post->title}}
                          </h1>
                        <span class="meta">Posted on
                       {{$post->created_at}}
                        </span>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <hr><br/><br/>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 ">
                    <img src="/storage/{{$post->image}}">
                   {!! $post->body !!}
                </div>
            </div>
        </div>
    </article>

    <hr>

@endsection
