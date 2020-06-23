@extends('master')

@section('title', 'My Resume')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h3>Contact Us</h3>

    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Login Form
    </button>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Weather Forecast
    </button>

    @include('includes.modal',['modal_content'=>'Please login','page'=>'loginform','hide_footer'=>'yes'])

@endsection
