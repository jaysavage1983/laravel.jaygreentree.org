@extends('layouts.app')
@section('title', 'Home')
@section('content')


   <section id="news-hero" class="news-hero section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="text-center mb-4 text-uppercase">Recent Articles</h2>
        <p></p>
      </div><!-- End Section Title -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <!-- Main Content Area -->
          <div class="col-lg-12">
            <!-- begin news items -->
            <div class="row g-4">
            	<!-- Message if a post is posted successfully -->
            	@if ($message = Session::get('success'))
            	<div class="alert alert-success">
            		<p>{{ $message }}</p>
            	</div>
            	@endif

            	         @if (count($latestPosts) > 0)
            	         @foreach ($latestPosts as $post)
              <div class="col-md-4">
                <article class="secondary-post" data-aos="fade-up">
                  <div class="post-image">

                    <img src="{{ asset('images/'.$post->image)}}" alt="" class="img-fluid">
                    
                  </div>
                  <div class="post-content">
                    <div class="post-meta">

                      <span class="category">
                        {{ $post->category }}
                      </span>

                    <h3 class="post-title">
                      <a href="{{ $posts->slug }}">
                      {!! $post->title !!}
                      </a>
                    </h3>
                      <span class="date">
                        {{ $post->published_at->format('F d, Y') }}
                      </span>
                    </div>
                    <span class="post-details">
                      {!! $post->description !!}
                    </span>
                      	{{--
                    <div class="post-author" style="display: none;">
                      <span>by</span>
                      <a href="javascript:;">
                        {{ entry.author }}
                      </a>
                    </div>
                      	--}}
                  </div>
                </article>
              </div>
@endforeach
  @else
    <p>No Posts found</p>
  @endif
            <!-- End news items -->
          </div>
        </div>
</div>
</section>

@endsection