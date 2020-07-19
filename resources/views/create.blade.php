@extends('layout.master')
@section('title')
ติดต่อ
@endsection
@section('content')
<div class="container">
    <h1><i class="fa fa-list"></i> Todo List ::</h1>
        <hr>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                เพิ่มรายการ
                </h4>
            </div>
            <div class="panel-body">
                <form action="/store" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <label for="inputName">กรอกชื่อรายการ :: </label>
                        <input type="text" name="detail" placeholder="ชื่อรายการ" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="selectCategory">เลือกหมวดหมู่ :: </label>
                        <select name="category_id" id="" class="form-control">
                            @foreach($categories as $item)
                        <option value="{{$item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success"> <i class="fa fa-save"></i> บันทึก</button>
                </form>
            </div>
        </div>
        <hr>
        <p>&copy; 2017 Bundit Nuntates</p>
    </div>
@endsection

