@extends('layouts.app')
@section('title', 'About')
@section('content')

<div class="container">
    <div class="row" style="margin-top: 10px; margin-bottom: 10px;">

        <!-- -->
        <div class="col-md-4" id="who">
            <a class="card imageSquare rounded-3" href="">
                <div class="card-image">
                	<img src="">
                </div>
                <div class="card-title text-center">
                	<h1>
                		The Who <br>
                		<small class="small">
                			(pun intended)
                		</small>
                	</h1>
                </div>
                <div class="card-body">
                	<p>
                		I am a technology and music nerd. I spend most of my time learninging different things with computers, website development and 
                	</p>
                </div>
            </a>
        </div>
        <!-- -->

        
        <div class="col-md-4" id="what">
            <a class="card imageSquare rounded-3" href="">
                <div class="card-image">

                </div>
                <div class="card-title text-center">
                	<h1>
                		The What
                	</h1>
                </div>
                <div class="card-body">

                </div>
            </a>
        </div>
        

        
        <div class="col-md-4">
            <a class="card imageSquare rounded-3" href="">
                <div class="card-image">

                </div>

                <div class="card-title text-center">
                	<h1>
                		The Where
                	</h1>
                </div>

                <div class="card-body">

                </div>
            </a>
        </div>
        

    </div>
</div>

@endsection