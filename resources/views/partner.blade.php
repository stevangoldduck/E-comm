@extends('adminlte::page')


@section('content')
    @include('stats')
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Partner</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <ul id="tree1">
                                @foreach($categories as $category)
                                    <li>
                                        {{ $category->name }}
                                        @if(count($category->childs))
                                            @include('manageChild',['childs' => $category->childs])
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
