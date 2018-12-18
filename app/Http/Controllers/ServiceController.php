<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function add_Service(Request $request){
        if ($request->isMethod('post')){
            $data=$request->all();
            $service=new Services();
            $service->title=$data['title'];
            $service->desc=$data['desc'];
            $service->save();
            return redirect('admin/view_service')->with('flash_message_error','Service Added Successfully');die;
        }
        return view('admin.service.add_service');
    }

    public function edit_Service(Request $request,$id=null){
        if ($request->isMethod('post')){
            $data=$request->all();
            Services::where(['id'=>$id])->update(['title'=>$data['title'],'desc'=>$data['desc']]);

            return redirect('admin/view_service')->with('flash_message_error','Service Edited Successfully');die;
        }
        $services=Services::where(['id'=>$id])->first();

        return view('admin.service.edit_service')->with(compact('services'));
    }

    public function view_Service(){
        $services=Services::get();
        $services=json_decode(json_encode($services));
        return view('admin.service.view_service')->with(compact('services'));
    }

    public function delete_Service($id=null){

        if (!empty($id)){
            Services::where(['id'=>$id])->delete();
            return redirect('admin/view_service')->with('flash_message_error','Service Deleted Successfully');die;
        }
    }
}
