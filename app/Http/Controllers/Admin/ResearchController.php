<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Utilities\Utility;
use App\Models\Research;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ResearchController extends Controller
{
    public function index() {

        $researches = Research::orderBy('id')->paginate(Utility::PAGINATE_COUNT);
        return view('admin.pages.researches.index',compact('researches'));
    }

    public function create() {
        return view('admin.pages.researches.add');
    }

    public function store () {
        Validator::make(request()->all(), [
            'title' => 'required|unique:researches,title',
            'description' => 'required',

            ])->validate();

        $input = request()->except(['_token','image']);

        // $input['is_active'] = 0;
        // if(request()->has('is_active')) {
        //     $input['is_active'] = 1;
        // }

        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'research_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('researches', $fileName);
            $input['image'] =$fileName;
        }

            $input['user_id'] =Auth::id();

        $research = Research::create($input);
        return redirect()->route('admin.researches.index')->with(['success'=>'New Research Added Successfully']);
    }

    public function edit($id) {
        $research = Research::findOrFail(decrypt($id));
        return view('admin.pages.researches.add',compact('research'));
    }

    public function update () {
        $id = decrypt(request('research_id'));
        $research = Research::find($id);

        Validator::make(request()->all(), [
            'title' => 'required|unique:researches,title,'. $id,
            'description' => 'required',

            ])->validate();

        $input = request()->except(['_token','_method','research_id','image','isImageDelete']);

        if(request('isImageDelete')==1) {
            Storage::delete(Research::DIR_PUBLIC . $research->image);
            $input['image'] =null;
        }
        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'research_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('researches', $fileName);
            $input['image'] =$fileName;
        }

        $research->update($input);
        return redirect()->route('admin.researches.index')->with(['success'=>'Research Updated Successfully']);
    }

    public function destroy($id) {
        $research = Research::find(decrypt($id));
        if(!empty($research->image)) {
            Storage::delete(Research::DIR_PUBLIC . $research->image);
            $input['image'] =null;
        }
        $research->delete();
        return redirect()->route('admin.researches.index')->with(['success'=>'Research Deleted Successfully']);
    }

    public function changeStatus($id) {
        $research = Research::find(decrypt($id));
        $currentStatus = $research->status;
        $status = $currentStatus ? 0 : 1;
        $research->update(['status'=>$status]);
        return redirect()->route('admin.researches.index')->with(['success'=>'Status changed Successfully']);
        // return redirect()->route('admin.researches.index')->with(['success'=>'Status changed Successfully']);
    }
}
