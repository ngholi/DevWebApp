@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    {{--<div class="panel-heading">Thành công</div>--}}
                    <div class="panel-body">
                        <h3>Thất bại</h3>
                        <p>{{$reason}}</p>
                        <br>
                        <a href="{{route('department')}}">Quay về trang chính</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection