@extends('layouts.landing')
@section('content')
    <!-- Hero -->
    <div style="background-color: #e4f1fc8f!important;">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h4 my-2">
                    SUTARTIES
                </h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item" aria-current="page">
                            <a class="link-fx" href="{{route('landing.dashboard')}}">DASHBOARD</a>
                        </li>
                        <li class="breadcrumb-item">SUTARTIES</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <div class="block-header" style="background-color: #e4f1fc8f!important;">
            <h3 class="block-title">SUTARTIES</h3>
            <div class="block-options">
                <a href="{{route('contracts.create')}}" class="btn btn-sm btn-success text-uppercase">
                    <i class="fa fa-plus mr-2"></i>Sukurti
                </a>
            </div>
        </div>
        <div class="block">
            <div class="block-content">
                <table class="table table-hover table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" width="10%">Sutartis Nr.</th>
                        <th class="text-center" width="10%">Data</th>
                        <th class="text-center" width="10%">Vieta</th>
                        <th class="text-center" width="10%">Pardavėjas V/P</th>
                        <th class="text-center" width="10%">Pardavėjas Tel.</th>
                        <th class="text-center" width="10%">Pirkėjas V/P</th>
                        <th class="text-center" width="10%">Pirkėjas IMONES</th>
                        <th class="text-center" width="10%">Pirkėjas A/K</th>
                        <th class="text-center" width="10%">Pirkėjas Tel.</th>
                        <th class="text-center" width="10%">Veiksmai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($objects as $object)
                        <tr>
                            <th class="text-center" scope="row">#{{$object->contract_number}}</th>
                            <td class="font-w600 font-size-sm text-center">{{$object->date}}</td>
                            <td class="font-w600 font-size-sm text-center">{{$object->place}}</td>
                            <td class="font-w600 font-size-sm text-center">{{$object->seller_full_name}}</td>
                            <td class="font-w600 font-size-sm text-center">{{$object->seller_phone_number}}</td>
                            <td class="font-w600 font-size-sm text-center">{{$object->buyer_full_name}}</td>
                            <td class="font-w600 font-size-sm text-center">{{$object->buyer_company_name}}</td>
                            <td class="font-w600 font-size-sm text-center">{{$object->buyer_personal_code}}</td>
                            <td class="font-w600 font-size-sm text-center">{{$object->buyer_phone_number}}</td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{route('contracts.show', $object->id)}}" type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Pamatyti pilną sutartį" >
                                        <i class="fa fa-fw fa-eye"></i>
                                    </a>
                                    <a href="{{route('contracts.edit', $object->id)}}" type="button" class="btn btn-sm btn-light" data-toggle="tooltip" title="Redaguoti sutartį" >
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    {!! Form::open(['route' => ['contracts.destroy', $object->id], 'method' => 'delete']) !!}
                                    {!! Form::button('<i class="fa fa-fw fa-times"></i>', ['class' => 'btn btn-sm btn-light', 'type' => 'submit', 'data-toggle' => 'tooltip', 'title' => 'Ištrinti sutartį' ]) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                    @empty
                        <h6 class="text-danger">Tuščias įrašas</h6>
                    @endforelse
                    </tbody>
                </table>
                {!! $objects->links() !!}
            </div>
        </div>
    </div>
    <!-- END Page Content -->
@stop
