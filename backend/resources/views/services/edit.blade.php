@extends('layouts.layout')
@section('content')
    <h3>Редактирование услуги</h3>
    <form method="post" action="/services/{{$service->id}}/update">
        @csrf
        <div>
            <input type="text" name="name" id="name" value="{{$service->name}}">
            <br>
            <textarea name="description" id="description" cols="30" rows="10">{{$service->desc}}</textarea>
            <br>
            <input type="number" name="price" id="price" value="{{$service->price}}">
            <!-- Other fields -->
        </div>

        <button type="submit">Сохранить</button>
    </form>

@endsection('content')