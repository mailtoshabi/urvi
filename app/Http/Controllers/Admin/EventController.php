<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Utilities\Utility;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    public function index() {

        $events = Event::orderBy('id')->paginate(Utility::PAGINATE_COUNT);
        return view('admin.pages.events.index',compact('events'));
    }

    public function create() {
        return view('admin.pages.events.add');
    }

    public function store () {

        Validator::make(request()->all(), [
            'title' => 'required|unique:events,title',
            // 'description' => 'required',
            'type' => 'required',
            ])->validate();

        $input = request()->except(['_token','image','completed']);

        // $input['is_active'] = 0;
        // if(request()->has('is_active')) {
        //     $input['is_active'] = 1;
        // }

        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'event_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('events', $fileName);
            $input['image'] =$fileName;
        }

            $input['completed'] = request('completed')?1:0;
            $input['user_id'] =Auth::id();

        $event = Event::create($input);
        return redirect()->route('admin.events.index')->with(['success'=>'New Event Added Successfully']);
    }

    public function edit($id) {
        $event = Event::findOrFail(decrypt($id));
        return view('admin.pages.events.add',compact('event'));
    }

    public function update () {
        $id = decrypt(request('event_id'));
        $event = Event::find($id);

        Validator::make(request()->all(), [
            'title' => 'required|unique:events,title,'. $id,
            // 'description' => 'required',
            'type' => 'required',
            ])->validate();

        $input = request()->except(['_token','_method','event_id','image','completed','isImageDelete']);

        if(request('isImageDelete')==1) {
            Storage::delete(Event::DIR_PUBLIC . $event->image);
            $input['image'] =null;
        }
        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'event_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('events', $fileName);
            $input['image'] =$fileName;
        }
        $input['completed'] = request('completed')?1:0;

        $event->update($input);
        return redirect()->route('admin.events.index')->with(['success'=>'Event Updated Successfully']);
    }

    public function destroy($id) {
        $event = Event::find(decrypt($id));
        if(!empty($event->image)) {
            Storage::delete(Event::DIR_PUBLIC . $event->image);
            $input['image'] =null;
        }
        $event->delete();
        return redirect()->route('admin.events.index')->with(['success'=>'Event Deleted Successfully']);
    }

    public function changeStatus($id) {
        $event = Event::find(decrypt($id));
        $currentStatus = $event->status;
        $status = $currentStatus ? 0 : 1;
        $event->update(['status'=>$status]);
        return redirect()->route('admin.events.index')->with(['success'=>'Status changed Successfully']);
        // return redirect()->route('admin.events.index')->with(['success'=>'Status changed Successfully']);
    }
}
