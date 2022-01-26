@extends('layouts.layout')
@section('content')
    <div>
        <h2>Услуги</h2>
        <div>
            <div class="list-group">
                @foreach($services as $service)
                    <a href="/services/{{$service->id}}" class="list-group-item list-group-item-action">{{$service->name}}</a>
                @endforeach
                <a class="btn btn-primary" href="/services/create">Добавить услугу</a>
            </div>
        </div>
    </div>

    <br>
    {{ $services->links() }}

@endsection