@extends('layouts.layout')
@section('content')
    <h3>{{$service->name}}</h3>
    <!-- <i>{{$service->data_create}}</i> -->
    <p>{{$service->desc}}</p>
    <br/>

    {{-- 
    <div>
    @foreach($comments as $comment)
        <b>{{$comment->title}}</b>
        <p>{{$comment->comment}}</p>
    @endforeach
    <br/>
    {{ $comments ->links() }}
    </div> --}}

    <a class="btn btn-secondary" href="/services/{{$service->id}}/edit">Редактировать</a>
    <a class="btn btn-primary" href="/services/{{$service->id}}/delete">Удалить</a>


    <!-- <form method="POST" action="/services/{{$service->id}}/comment">
        @csrf -->
        <!-- <input type="hidden" name="service_id" value="{{$service->id}}"/> -->

        <!-- <div class="mb-3">
            <label class="form-label">Заголовок комментария</label>
            <input type="text" name="comment_title" class="form-control"/>
        </div>
        <div class="mb-3">
            <label class="form-label">Комментарий</label>
            <textarea class="form-control" name="comment" rows="3" required></textarea>
        </div>
        <button class="btn btn-primary">Отправить</button>
    </form> -->
@endsection
