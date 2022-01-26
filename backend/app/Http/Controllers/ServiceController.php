<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Service;
use App\Models\ServiceComment;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Cache;
use App\Events\NotifyEvent;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentPage = request()->get('page',1);
        $services = Cache::remember('services:all'.$currentPage, 2000, function(){
            return Service::paginate(10);
        });
       return response()->json([
           'services' => $services,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response($this->authorize('create', [self::class]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        // if ($id == null) $service = new Service();
        // else $service = service::findOrFail($id);
        $service = new Service();
        $service->name = request('name');
        $service->slug = request('slug');
        $service->desc = request('description');
        $service->price = request('price');
        $service->save();
        Cache::forget('services:all');
        $user = User::where('id', '!=', auth()->user()->id)->get();
    
        event(new NotifyEvent($service));
        
        return response()->json([
            'service' => $service
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Cache::rememberForever('service:'.$id, function()use($id){
            return Service::findOrFail($id);
        });
        $comments = Cache::rememberForever('service:comments:'.$id, function()use($id){
            return ServiceComment::where('service_id', $id)->where('accept', 1)->paginate(7);
        });
        return response()->Json([
            'service' => $service,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Gate::authorize('update-service');
        $service = Service::findOrFail($id);
        Cache::forget('services:all');
        Cache::forget('service:'.$id);
        return response([
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->name = request('name');
        $article->slug = request('slug');
        $service->desc = request('description');
        $service->price = request('price');
        $service->save();
        Cache::forget('services:all');
        $user = User::where('id', '!=', auth()->user()->id)->get();
        Notification::send($user, new ServiceNotification($service));
        
        event(new EventNewService($service));
        return response()->json([
            'service' => $service
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gate::authorize('delete-service');
        Cache::forget('services:all');
        Cache::forget('service:'.$id);
        Cache::forget('service:comments:'.$id);
        return response(Service::findOrFail($id)->delete());
    }
}
