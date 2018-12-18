<?php

namespace App\Http\Controllers;

use App\Abouts;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function add_About(Request $request){
        if ($request->isMethod('post')){
            $data=$request->all();
            $about=new Abouts();
            $about->title=$data['title'];
            $about->desc=$data['desc'];
            $about->save();
            return redirect('admin/view_about')->with('flash_message_error','About Added Successfully');die;
        }
        return view('admin.about.add_about');
    }

    public function edit_About(Request $request,$id=null){
        if ($request->isMethod('post')){
            $data=$request->all();
            Abouts::where(['id'=>$id])->update(['title'=>$data['title'],'desc'=>$data['desc']]);

            return redirect('admin/view_about')->with('flash_message_error','About Edited Successfully');die;
        }
        $about=Abouts::where(['id'=>$id])->first();

        return view('admin.about.edit_about')->with(compact('about'));
    }

    public function view_About(){
        $about=Abouts::get();
        $about=json_decode(json_encode($about));
        return view('admin.about.view_about')->with(compact('about'));
    }

    public function delete_About($id=null){

        if (!empty($id)){
            Abouts::where(['id'=>$id])->delete();
            return redirect('admin/view_about')->with('flash_message_error','Group Deleted Successfully');die;
        }
    }
}
