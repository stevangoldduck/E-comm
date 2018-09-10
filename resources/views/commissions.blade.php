@extends('adminlte::page')


@section('content')
    @include('stats')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Commissions</div>
                <div class="panel-body">
                    {!! $commissions->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection