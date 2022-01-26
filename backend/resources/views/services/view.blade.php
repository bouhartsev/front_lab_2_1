@extends('layouts.layout')
@section('content')
    <h3>{{$service->name}}</h3>
    <!-- <i>{{$service->data_create}}</i> -->
    <p>{{$service->desc}}</p>
    <br/>

    <div>
    @foreach($comments as $comment)
        <b>{{$comment->mark}}</b>
        <p>{{$comment->comment}}</p>
    @endforeach
    <br/>
    <!-- {{ $comments ->links() }} -->
    <!-- </div> -->

    <a href="/services/{{$service->id}}/edit">Редактировать</a>
    <a href="/services/{{$service->id}}/delete">Удалить</a>



    <br/><br/><br/><br/>

    <form method="POST" action="/services/{{$service->id}}/comment">
        @csrf
        <input type="hidden" name="service_id" value="{{$service->id}}"/>

        <div>
            <label>Оценка</label>
            <input type="number" name="comment_mark"/>
        </div>
        <div>
            <labe>Комментарий</label>
            <textarea name="comment" rows="3" required></textarea>
        </div>
        <button>Отправить</button>
    </form>
    
@endsection
