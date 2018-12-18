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
use App\Team;

class TeamController extends Controller
{
    public function add_Team(Request $request){
        if ($request->isMethod('post')){
            $data=$request->all();
            $team=new Team();
            $team->Fname=$data['name'];
            $team->status=$data['status'];
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,99999).'.'.$extension;
                    $large_image_path='images/back_end/team/large/'.$filename;
                    $medium_image_path='images/back_end/team/medium/'.$filename;
                    $small_image_path='images/back_end/team/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    $team->image=$data['image']=$filename;
                }
            }
            $team->facebook=$data['fb'];
            $team->twitter=$data['tw'];
            $team->Googleplus=$data['google'];
              $team->save();
            return redirect('admin/view_team')->with('flash_message_success','Team Member Added Successfully');die;
        }


        return view('admin.team.add_team');
    }

    public function view_Team(){
        $teams=Team::get();
        $teams=json_decode(json_encode($teams));

        return view('admin.team.view_team')->with(compact('teams'));
    }

    public function edit_Team(Request $request,$id=null){
        if ($request->isMethod('post')){
            $data=$request->all();
            $product= new Team();
            if ($request->hasFile('image')){
                $image_tmp=Input::file('image');
                if ($image_tmp->isValid()){
                    $extension=$image_tmp->getClientOriginalExtension();
                    $filename=rand(111,999).'.'.$extension;
                    $large_image_path='images/back_end/team/large/'.$filename;
                    $medium_image_path='images/back_end/team/medium/'.$filename;
                    $small_image_path='images/back_end/team/small/'.$filename;

                    Image::make($image_tmp)->save($large_image_path);
                    Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);


                    $product->image=$data['image']=$filename;

                }
            }
            else{
                // $product->image=$data['image']=$data['current_image'];
            }
            Team::where(['id'=>$id])->update(['FName'=>$data['name'],'status'=>$data['status'],
                'facebook'=>$data['fb'],'twitter'=>$data['tw'],'Googleplus'=>$data['google'],'image'=>$data['image']]);

            return redirect('admin/view_team')->with('flash_message_error','Team Member Edited Successfully');die;
        }

        $team=Team::where(['id'=>$id])->first();
        return view('admin.team.edit_team')->with(compact('team'));

    }
    public function delete_Team($id=null){

        if (!empty($id)){
            Team::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_error','Team Member Deleted Successfully');die;
        }
    }

}
