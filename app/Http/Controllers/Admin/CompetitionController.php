<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Utilities\Utility;
use App\Models\Competition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CompetitionController extends Controller
{
    public function index() {
        $competitions = Competition::orderBy('id')->paginate(Utility::PAGINATE_COUNT);
        return view('admin.pages.competitions.index',compact('competitions'));
    }

    public function create() {
        return view('admin.pages.competitions.add');
    }

    public function store () {
        Validator::make(request()->all(), [
            'title' => 'required|unique:competitions,title',
            'description' => 'required',

            ])->validate();

        $input = request()->except(['_token','image']);

        // $input['is_active'] = 0;
        // if(request()->has('is_active')) {
        //     $input['is_active'] = 1;
        // }

        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'competition_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('competitions', $fileName);
            $input['image'] =$fileName;
        }

            $input['user_id'] =Auth::id();

        $competition = Competition::create($input);
        return redirect()->route('admin.competitions.index')->with(['success'=>'New Competition Added Successfully']);
    }

    public function edit($id) {
        $competition = Competition::findOrFail(decrypt($id));
        return view('admin.pages.competitions.add',compact('competition'));
    }

    public function update () {
        $id = decrypt(request('competition_id'));
        $competition = Competition::find($id);

        Validator::make(request()->all(), [
            'title' => 'required|unique:competitions,title,'. $id,
            'description' => 'required',

            ])->validate();

        $input = request()->except(['_token','_method','competition_id','image','isImageDelete']);

        if(request('isImageDelete')==1) {
            Storage::delete(Competition::DIR_PUBLIC . $competition->image);
            $input['image'] =null;
        }
        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'competition_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('competitions', $fileName);
            $input['image'] =$fileName;
        }

        $competition->update($input);
        return redirect()->route('admin.competitions.index')->with(['success'=>'Competition Updated Successfully']);
    }

    public function destroy($id) {
        $competition = Competition::find(decrypt($id));
        if(!empty($competition->image)) {
            Storage::delete(Competition::DIR_PUBLIC . $competition->image);
            $input['image'] =null;
        }
        $competition->delete();
        return redirect()->route('admin.competitions.index')->with(['success'=>'Competition Deleted Successfully']);
    }

    public function changeStatus($id) {
        $competition = Competition::find(decrypt($id));
        $currentStatus = $competition->status;
        $status = $currentStatus ? 0 : 1;
        $competition->update(['status'=>$status]);
        return redirect()->route('admin.competitions.index')->with(['success'=>'Status changed Successfully']);
        // return redirect()->route('admin.competitions.index')->with(['success'=>'Status changed Successfully']);
    }
}
