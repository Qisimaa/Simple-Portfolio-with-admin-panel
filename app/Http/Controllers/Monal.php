<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Testimonal;

class Monal extends Controller
{
    public function add_Testimonal(Request $request){
        if ($request->isMethod('post')){
            $data=$request->all();
            $team=new Testimonal();
            $team->FName=$data['name'];
            $team->status=$data['status'];
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='images/back_end/testimonal/large/'.$filename;
                    $medium_image_path='images/back_end/testimonal/medium/'.$filename;
                    $small_image_path='images/back_end/testimonal/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    $team->image=$data['image']=$filename;
                }
            }
            $team->desc=$data['desc'];
            $team->save();
            return redirect('admin/view_testimonal')->with('flash_message_success','Team Member Added Successfully');die;
        }


        return view('admin.Testimonal.add_testimonal');
    }

    public function view_TestiMonal(){
        $teams=Testimonal::get();
        $teams=json_decode(json_encode($teams));

        return view('admin.Testimonal.view_testimonal')->with(compact('teams'));
    }

    public function edit_TestiMonal(Request $request,$id=null){
        if ($request->isMethod('post')){
            $data=$request->all();
            $product= new Testimonal();
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,999).'.'.$extension;
                    $large_image_path='images/back_end/testimonal/large/'.$filename;
                    $medium_image_path='images/back_end/testimonal/medium/'.$filename;
                    $small_image_path='images/back_end/testimonal/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);


                    $product->image=$data['image']=$filename;

                }
            }
            else{
                // $product->image=$data['image']=$data['current_image'];
            }
            Testimonal::where(['id'=>$id])->update(['FName'=>$data['name'],'status'=>$data['status'],
                'desc'=>$data['desc'],'image'=>$data['image']]);

            return redirect('admin/view_testimonal')->with('flash_message_error','Testimonal Edited Successfully');die;
        }

        $team=Testimonal::where(['id'=>$id])->first();
        return view('admin.Testimonal.edit_testimonal')->with(compact('team'));

    }
    public function delete_TestiMonal($id=null){

        if (!empty($id)){
            Testimonal::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_error','Testimonal Deleted Successfully');die;
        }
    }
}
