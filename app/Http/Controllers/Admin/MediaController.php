<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Utilities\Utility;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image as ResizeImage;

class MediaController extends Controller
{
    public function index() {

        $medias = Media::orderBy('id')->paginate(Utility::PAGINATE_COUNT);
        return view('admin.pages.medias.index',compact('medias'));
    }

    public function create() {
        return view('admin.pages.medias.add');
    }

    public function store () {
        Validator::make(request()->all(), [
            'title' => 'required|unique:medias,title',
            'type' => 'required',
            ])->validate();

        $input = request()->except(['_token','image']);

        // $input['is_active'] = 0;
        // if(request()->has('is_active')) {
        //     $input['is_active'] = 1;
        // }

        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = date('YmdHis') . '.' . $extension;
            request('image')->storeAs('medias', $fileName);
            $input['image'] =$fileName;
        }

        if(request()->hasFile('image')) {
            $file = request('image');
            $file_name = '750x500_' . date('YmdHis') . '.' . $extension;
            $destinationPath = storage_path("app" . '/' . 'public' .  '/' . Media::DIR_PUBLIC);

            !is_dir($destinationPath) &&
                mkdir($destinationPath, 0777, true);

                $image = ResizeImage::make($file->path());
                $image->resize(750, 500, function($constraint) {
                    // $constraint->aspectRatio();
                });
                $image->save($destinationPath.'/'.$file_name,90);
            }

        if(request('type')==1) {

        }
        else if(request('type')==2) {
            $input['youtube_code'] = request('youtube_code');
        } else if(request('type')==3) {
            $input['media_link'] = request('media_link');
        }

            $input['user_id'] =Auth::id();

        $media = Media::create($input);
        return redirect()->route('admin.medias.index')->with(['success'=>'New Media Added Successfully']);
    }

    public function edit($id) {
        $media = Media::findOrFail(decrypt($id));
        return view('admin.pages.medias.add',compact('media'));
    }

    public function update () {
        $id = decrypt(request('media_id'));
        $media = Media::find($id);

        Validator::make(request()->all(), [
            'title' => 'required|unique:medias,title,'. $id,
            'type' => 'required',
            ])->validate();

        $input = request()->except(['_token','_method','media_id','image','isImageDelete']);

        if(request('isImageDelete')==1) {
            Storage::delete(Media::DIR_PUBLIC . $media->image);
            $input['image'] =null;
        }

        // if(!empty($media->image)) {
        //     Storage::delete(Media::DIR_PUBLIC . $media->image);
        //     $input['image'] =null;
        // }

        if(request()->hasFile('image')) {
            $extension = request('image')->extension();
            $fileName = date('YmdHis') . '.' . $extension;
            request('image')->storeAs('medias', $fileName);
            $input['image'] =$fileName;
        }

        if(request()->hasFile('image')) {
            $file = request('image');
            $file_name = '750x500_' . date('YmdHis') . '.' . $extension;
            $destinationPath = storage_path("app" . '/' . 'public' .  '/' . Media::DIR_PUBLIC);

            !is_dir($destinationPath) &&
                mkdir($destinationPath, 0777, true);

                $image = ResizeImage::make($file->path());
                $image->resize(750, 500, function($constraint) {
                    // $constraint->aspectRatio();
                });
                $image->save($destinationPath.'/'.$file_name,90);
            }

        if(request('type')==1) {
            $input['media_link'] =null;
            $input['youtube_code'] = null;

        }
        else if(request('type')==2) {
            Storage::delete(Media::DIR_PUBLIC . $media->image);
            // $input['image'] =null;
            $input['media_link'] = null;
            $input['youtube_code'] = request('youtube_code');
        } else if(request('type')==3) {
            Storage::delete(Media::DIR_PUBLIC . $media->image);
            // $input['image'] =null;
            $input['youtube_code'] = null;
            $input['media_link'] = request('media_link');
        }
        $media->update($input);
        return redirect()->route('admin.medias.index')->with(['success'=>'Media Updated Successfully']);
    }

    public function destroy($id) {
        $media = Media::find(decrypt($id));
        if(!empty($media->image)) {
            Storage::delete(Media::DIR_PUBLIC . $media->image);
            $input['image'] =null;
        }
        $media->delete();
        return redirect()->route('admin.medias.index')->with(['success'=>'Media Deleted Successfully']);
    }

    public function changeStatus($id) {
        $media = Media::find(decrypt($id));
        $currentStatus = $media->status;
        $status = $currentStatus ? 0 : 1;
        $media->update(['status'=>$status]);
        return redirect()->route('admin.medias.index')->with(['success'=>'Status changed Successfully']);
        // return redirect()->route('admin.medias.index')->with(['success'=>'Status changed Successfully']);
    }
}
