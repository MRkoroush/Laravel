<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Models\home;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as FacadesView;

class HomepageController extends Controller
{
    
    public function index()
    {
        $home =home::all();
        return View('admin.home.index',compact('home'));
    }

    public function create()
    {
        return View('admin.home.create');
    }

    public function store(Request $request)
    {
        $file =$request->file('picture');
        $image = "";
        if(!empty($file)){
            $image = time() . "." . $file->getClientOriginalExtension();
            $file->move('Admin/images/homepage',$image);
        }
        home::create([
            'picture' => $image,
            'tittle' => $request->tittle,
            'subject'=>$request->subject,
            'job'=>$request->job,
            'description'=>$request->description,
            'link'=>$request->link,
        ]);
        return redirect()->route('homepage.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $home = home::FindOrFail($id);
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request, $id)
    {
        $home = home::FindOrFail($id);
        $file =$request->file('picture');
        $image = "";
        if(!empty($file)){
            if(file_exists('Admin/images/homepage/'.$home ->picture)){
                unlink('Admin/images/homepage/'.$home->picture);
            }
            $image = time() . "." .$file->getClientOriginalExtension();
            $file->move('Admin/images/homepage/',$image);
        }else{
            $image = $home->image;
        }

        $home->update([
            'picture' => $image,
            'tittle' => $request->tittle,
            'subject'=>$request->subject,
            'job'=>$request->job,
            'description'=>$request->description,
            'link'=>$request->link,
        ]);

        return redirect()-> route('homepage.index');
    }

    public function destroy($id)
    {
        $home = home::FindOrFail($id);
        if(!empty($file)){
            if(file_exists('Admin/images/homepage/'.$home ->picture)){
                unlink('Admin/images/homepage/'.$home->picture);
            }
            
        }
        $home->destroy($id);

        return redirect()-> route('homepage.index');
    }
}
