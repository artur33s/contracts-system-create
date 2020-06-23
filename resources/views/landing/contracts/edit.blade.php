@extends('layouts.landing')
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Sutarties [Redaguoti]
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('landing.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('contracts.index')}}">Sutarties</a>
                        </li>
                        <li class="breadcrumb-item">Redaguoti</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">
        <!-- Basic -->
        <div class="block block-bordered">
            <div class="block-header">
                <h3 class="block-title">Redaguoti sutartis: #{{$object->contract_number}}</h3>
            </div>
            <div class="block-content block-content-full">

                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        {!! Form::model($object, ['url' => route('contracts.update', $object->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                        @csrf
                        @include('landing.contracts._form')
                        {!! Form::submit('Išsaugoti pakeitimus', ['class' => 'btn btn-block btn-primary mr-1 mb-3']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
