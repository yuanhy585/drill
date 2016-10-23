@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <select type="text" id="province_id" name="province_id" class="form-control">
                    <option>请选择</option>
                    @foreach($provinces as $id => $name)
                        <option  value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <select type="text" id="cities" name="cities" class="form-control">
                    <option>请选择</option>
                    @foreach($cities as $id => $name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <hr/>



</div>
@endsection