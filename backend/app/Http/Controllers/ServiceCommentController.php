<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceComment;

class ServiceCommentController extends Controller
{
    // public function index(){
    //     $comments = ServiceComment::orderBy('accept', 'asc')->get();
    //     foreach($comments as $comment){
    //         $service[] = Service::findOrFail($comment->service_id);
    //     }
    //     return view('comment.index', ['comments' => $comments, 'service' => $service]);
    // }

    // public function accept($id){
    //     $comment = ServiceComment::findOrFail($id);
    //     $comment->accept = 1;
    //     $comment->save();
    //     return redirect()->route('index');
    // }

    public function store($id){
        $service = Service::findOrFail($id);
        if ($service){
            $comment_mark = request('comment_mark');
            $comment = request('comment');
            if ($comment && $comment_mark){
                
                $new_comment = new ServiceComment();
                $new_comment->mark = $comment_mark;
                $new_comment->comment = $comment;
                $new_comment->Service()->associate($service);
                $result = $new_comment->save();
                echo $result.' test';
                // if ($result){
                //     VeryLongJob::dispatch($service);
                // }
                // return redirect()->route('show', ['id' => $id, 'result' => $result]);
                return redirect('/services/'.$id);
            }
        }
    }

    public function destroy($id){
        ServiceComment::findOrFail($id)->delete();
        return redirect()->route('index');
    }
}
