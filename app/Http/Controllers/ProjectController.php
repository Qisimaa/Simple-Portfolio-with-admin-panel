<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use App\Sliders;

class ProjectController extends Controller
{
    public function add_Slider(Request $request){
        if ($request->isMethod('post')){
            $data=$request->all();
            if (empty($data['image'])){
                return redirect('admin/add_slider')->with('flash_message_error','Slide can not be empty');die;
            }
            $slider=new Sliders();
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='images/back_end/slider/large/'.$filename;
                    $medium_image_path='images/back_end/slider/medium/'.$filename;
                    $small_image_path='images/back_end/slider/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    $slider->image=$filename;
                }
            }
            $slider->save();
            return redirect('admin/view_slider')->with('flash_message_success','Slide Added Successfully');die;
        }


        return view('admin.slider.add_slider');
    }
    public function view_Slider(){
        $sliders=Sliders::get();
        $sliders=json_decode(json_encode($sliders));

        return view('admin.slider.view_slider')->with(compact('sliders'));
    }

    public function edit_Slider(Request $request,$id=null){
        if ($request->isMethod('post')){
            $data=$request->all();
            $product= new Sliders();
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='images/back_end/slider/large/'.$filename;
                    $medium_image_path='images/back_end/slider/medium/'.$filename;
                    $small_image_path='images/back_end/slider/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);


                    $product->image=$data['image']=$filename;

                }
            }
            else{
               // $product->image=$data['image']=$data['current_image'];
            }
            Sliders::where(['id'=>$id])->update(['image'=>$data['image']]);

            return redirect('admin/view_slider')->with('flash_message_error','Slider Edited Successfully');die;
        }

        $sliders=Sliders::where(['id'=>$id])->first();
        return view('admin.slider.edit_slider')->with(compact('sliders'));

    }
    public function delete_Slider($id=null){

        if (!empty($id)){
            Sliders::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_error','Product Deleted Successfully');die;
        }
    }

}
