@extends('adminlte::page')


@section('content')
    @include('stats')
    <div class="row">
        <div class="col-lg-12">
            <form class="form-inline" method="post" action="{{url('insert-link')}}">
                {{csrf_field()}}
                <input type="hidden" value="{{Auth::id()}}" name="belongs_to">
                <button type="submit" class="btn btn-info">GENERATE NEW LINK</button>
            </form>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Link List</div>
                <div class="panel-body">
                    @if(count($link) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Link</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($link as $data)
                                    <tr>
                                        <td>
                                            <input disabled="disabled" class="form-control" value="{{Request::server ("HTTP_HOST")."/product/".$data->link}}">
                                        </td>
                                        <td>{{$data->created_at}}</td>
                                        <td><button type="button" class="btn btn-primary">Copy</button></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @else
                        No data
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection