<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Utilities\Utility;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::orderBy('id')->paginate(Utility::PAGINATE_COUNT);
        return view('admin.pages.projects.index',compact('projects'));
    }

    public function create() {
        return view('admin.pages.projects.add');
    }

    public function store () {
        Validator::make(request()->all(), [
            'title' => 'required|unique:projects,title',
            'description' => 'required',
            'type' => 'required',
            ])->validate();

        $input = request()->except(['_token','image']);

        // $input['is_active'] = 0;
        // if(request()->has('is_active')) {
        //     $input['is_active'] = 1;
        // }

        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'project_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('projects', $fileName);
            $input['image'] =$fileName;
        }

            $input['user_id'] =Auth::id();

        $project = Project::create($input);
        return redirect()->route('admin.projects.index')->with(['success'=>'New Project Added Successfully']);
    }

    public function edit($id) {
        $project = Project::findOrFail(decrypt($id));
        return view('admin.pages.projects.add',compact('project'));
    }

    public function update () {
        $id = decrypt(request('project_id'));
        $project = Project::find($id);

        Validator::make(request()->all(), [
            'title' => 'required|unique:projects,title,'. $id,
            'description' => 'required',
            'type' => 'required',
            ])->validate();

        $input = request()->except(['_token','_method','project_id','image','isImageDelete']);

        if(request('isImageDelete')==1) {
            Storage::delete(Project::DIR_PUBLIC . $project->image);
            $input['image'] =null;
        }
        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = 'project_pic_' . date('YmdHis') . '.' . $extension;
            request('image')->storeAs('projects', $fileName);
            $input['image'] =$fileName;
        }

        $project->update($input);
        return redirect()->route('admin.projects.index')->with(['success'=>'Project Updated Successfully']);
    }

    public function destroy($id) {
        $project = Project::find(decrypt($id));
        if(!empty($project->image)) {
            Storage::delete(Project::DIR_PUBLIC . $project->image);
            $input['image'] =null;
        }
        $project->delete();
        return redirect()->route('admin.projects.index')->with(['success'=>'Project Deleted Successfully']);
    }

    public function changeStatus($id) {
        $project = Project::find(decrypt($id));
        $currentStatus = $project->status;
        $status = $currentStatus ? 0 : 1;
        $project->update(['status'=>$status]);
        return redirect()->route('admin.projects.index')->with(['success'=>'Status changed Successfully']);
        // return redirect()->route('admin.projects.index')->with(['success'=>'Status changed Successfully']);
    }

}
