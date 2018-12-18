<?php

namespace App\Http\Controllers;
use App\Recent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Auth;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
class WorkController extends Controller
{
    public function add_Work(Request $request){
        if ($request->isMethod('post')){
            $data=$request->all();
            if (empty($data['image'])){
                return redirect('admin/add_work')->with('flash_message_error','Image can not be empty');die;
            }
            $category=new Recent();
            $category->title=$data['title'];
            if (!empty($data['desc'])){
                $category->desc=$data['desc'];
            }
            else{
                $category->desc='';
            }
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='images/back_end/works/large/'.$filename;
                    $medium_image_path='images/back_end/works/medium/'.$filename;
                    $small_image_path='images/back_end/works/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    $category->image=$filename;
                }
            }

            $category->save();
            return redirect('admin/view_work')->with('flash_message_success','Recent Work Added Successfully');die;
        }



        return view('admin.work.add_work');
    }

    public function edit_Work(Request $request,$id=null){
        if ($request->isMethod('post')){
            $data=$request->all();
            $product= new Recent();
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='images/back_end/works/large/'.$filename;
                    $medium_image_path='images/back_end/works/medium/'.$filename;
                    $small_image_path='images/back_end/works/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);


                    $product->image=$data['image']=$filename;

                }
            }
            else{
                // $product->image=$data['image']=$data['current_image'];
            }
            Recent::where(['id'=>$id])->update(['image'=>$data['image']]);

            return redirect('admin/view_work')->with('flash_message_error','Recent Work Edited Successfully');die;
        }

        $works=Recent::where(['id'=>$id])->first();
        return view('admin.work.edit_work')->with(compact('works'));

    }

    public function view_Work(){
        $works=Recent::get();
        $works=json_decode(json_encode($works));

        return view('admin.work.view_work')->with(compact('works'));
    }

    public function delete_Work($id=null){

        if (!empty($id)){
            Recent::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_error','Recent Work Deleted Successfully');die;
        }
    }
}
