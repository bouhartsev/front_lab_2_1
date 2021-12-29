<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceComment;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::paginate(10);
        return view('services.index',['services'=> $services]);
    }

    public function create(){
        return view('services.create');
    }

    public function store($id=null, Request $request){
       
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        if ($id == null) $service = new Service();
        else $service = service::findOrFail($id);
        $service->name = request('name');
        $service->desc = request('description');
        $service->price = request('price');
        $service->save();
        return redirect('/services/'.$service->$id);
    }

    public function view($id){
        $service = Service::findOrFail($id);

        $comments = serviceComment::where('service_id', $id)->paginate(3);

        return view('services.view',['service'=>$service, 'comments'=>$comments]);
    }

    public function update($id){
        $service = Service::findOrFail($id);
        return view('services.edit', ['service'=>$service]);
    }

    public function destroy($id){
        Service::findOrFail($id)->delete();
        return redirect ('/services');
    }
}
