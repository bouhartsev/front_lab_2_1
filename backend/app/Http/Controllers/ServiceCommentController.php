<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceComment;
use App\Jobs\MailJob;


class ServiceCommentController extends Controller
{

    public function index(){
        $comments = ServiceComment::orderBy('accept', 'asc')->get();
        foreach($comments as $comment){
            $service[] = Service::findOrFail($comment->service_id);
        }
        return response()->json([
            'service' => $service,
            'comments' => $comments
        ]);
    }

    public function accept($id){
        $comment = ServiceComment::findOrFail($id);
        $comment->accept = 1;
        $comment->save();
        return response([
            'comment' => $comment
        ]);
    }

    public function store($id){
        $service = Service::findOrFail($id);
        if ($service){
            $comment_mark = request('comment_mark');
            $comment = request('comment');
            if ($comment && $comment_mark){
                $new_comment = new ServiceComment();
                $new_comment->mark = $comment_mark;
                $new_comment->comment = $comment;
                $new_comment->service()->associate($service);
                $result = $new_comment->save();
                if ($result){
                    MailJob::dispatch($service);
                }
                return response()->json([
                    'result' => $result,
                    'new_comment' => $new_comment
                ]);
            }
        }
    }

    public function destroy($id){
        return response(ServiceComment::findOrFail($id)->delete());
    }
}