<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Utilities\Utility;
use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AwardController extends Controller
{
    public function index() {

        $awards = Award::orderBy('id')->paginate(Utility::PAGINATE_COUNT);
        return view('admin.pages.awards.index',compact('awards'));
    }

    public function create() {
        return view('admin.pages.awards.add');
    }

    public function store () {
        Validator::make(request()->all(), [
            'title' => 'required|unique:awards,title',
            'description' => 'required',

            ])->validate();

        $input = request()->except(['_token','image']);

        // $input['is_active'] = 0;
        // if(request()->has('is_active')) {
        //     $input['is_active'] = 1;
        // }

        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'award_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('awards', $fileName);
            $input['image'] =$fileName;
        }

            $input['user_id'] =Auth::id();

        $award = Award::create($input);
        return redirect()->route('admin.awards.index')->with(['success'=>'New Award Added Successfully']);
    }

    public function edit($id) {
        $award = Award::findOrFail(decrypt($id));
        return view('admin.pages.awards.add',compact('award'));
    }

    public function update () {
        $id = decrypt(request('award_id'));
        $award = Award::find($id);

        Validator::make(request()->all(), [
            'title' => 'required|unique:awards,title,'. $id,
            'description' => 'required',

            ])->validate();

        $input = request()->except(['_token','_method','award_id','image','isImageDelete']);

        if(request('isImageDelete')==1) {
            Storage::delete(Award::DIR_PUBLIC . $award->image);
            $input['image'] =null;
        }
        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'award_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('awards', $fileName);
            $input['image'] =$fileName;
        }

        $award->update($input);
        return redirect()->route('admin.awards.index')->with(['success'=>'Award Updated Successfully']);
    }

    public function destroy($id) {
        $award = Award::find(decrypt($id));
        if(!empty($award->image)) {
            Storage::delete(Award::DIR_PUBLIC . $award->image);
            $input['image'] =null;
        }
        $award->delete();
        return redirect()->route('admin.awards.index')->with(['success'=>'Award Deleted Successfully']);
    }

    public function changeStatus($id) {
        $award = Award::find(decrypt($id));
        $currentStatus = $award->status;
        $status = $currentStatus ? 0 : 1;
        $award->update(['status'=>$status]);
        return redirect()->route('admin.awards.index')->with(['success'=>'Status changed Successfully']);
        // return redirect()->route('admin.awards.index')->with(['success'=>'Status changed Successfully']);
    }
}
