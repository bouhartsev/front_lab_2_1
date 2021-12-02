<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Service;
// use App\Models\ServiceComment;

class ServiceController extends Controller
{
    public function index(){
        $services = service::paginate(10);
        return view('services.index',['services'=> $services]);
    }

    public function create(){
        return view('services.create');
    }

    public function store($id=null, Request $request){
       
        $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        if ($id == null) $service = new services();
        else $service = service::findOrFail($id);
        $service->name = request('name');
        $service->short_text = request('desc');
        $service->save();
        return redirect('/services/'.$service->$id);
    }

    // public function view($id){
    //     $service = service::findOrFail($id);

    //     $comments = serviceComment::where('service_id', $id)->paginate(3);

    //     return view('services.view',['service'=>$service, 'comments'=>$comments]);
    // }

    // public function update($id){
    //     $service = service::findOrFail($id);
    //     return view('services.update', ['service'=>$service]);
    // }

    public function destroy($id){
        services::findOrFail($id)->delete();
        return redirect ('/services');
    }
}
