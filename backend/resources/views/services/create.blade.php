@extends('layouts.layout')
@section('content')
    <h3>Добавить услугу</h3>
    <form method="post" action="/services">
        @csrf
        <div>
            <input type="text" name="name" id="name" placeholder="Введите заголовок">
            <br>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Описание новости"></textarea>
            <br>
            <input type="number" name="price" id="price" >
            <!-- Other fields -->
        </div>

        <button type="submit">Отправить</button>
    </form>

@endsection('content')