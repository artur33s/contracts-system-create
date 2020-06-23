@extends('layouts.landing')
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    Sutarties [Pamatyti]
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('landing.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('contracts.index')}}">Sutarties</a>
                        </li>
                        <li class="breadcrumb-item">Pamatyti #{{$object->contract_number}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
        <div class="block">
            <div class="block-header">
                <h3 class="block-title">Title <small>Subtitle</small></h3>
                <div class="block-options">
                    <div class="btn-group">
                        <a href="{{route('pdf.download', $object->id)}}" type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Parsisiųsti PDF" >
                            <i class="fa fa-fw fa-file-pdf"></i>
                        </a>
                        <a href="{{route('contracts.edit', $object->id)}}" type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Redaguoti sutartį" >
                            <i class="fa fa-fw fa-pencil-alt"></i>
                        </a>
                        {!! Form::open(['route' => ['contracts.destroy', $object->id], 'method' => 'delete']) !!}
                        {!! Form::button('<i class="fa fa-fw fa-times"></i>', ['class' => 'btn btn-sm btn-light', 'type' => 'submit', 'data-toggle' => 'tooltip', 'title' => 'Ištrinti sutartį' ]) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            <div class="block-content">
                @include('landing.contracts.contract_text')
            </div>
        </div>
@stop
