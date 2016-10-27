@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" type="text" id="class_id" name="class_id" >
                    <option>请选择班级</option>
                    @foreach($classes as $id => $name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" type="text" id="students" name="students">
                    <option>请选择学生</option>
                    @foreach($students as $id => $name)
                        <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>
@endsection