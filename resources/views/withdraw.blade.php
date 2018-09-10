@extends('adminlte::page')


@section('content')
    @include('stats')
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Withdrawals</div>
                <div class="panel-body">
                    {!! $table->render() !!}
                </div>
            </div>
        </div>
    </div>
@endsection