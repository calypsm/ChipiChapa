<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Display;

class displayController extends Controller
{
    public function displayList(){
        return view('display');
    }

    public function createDisplay(Request $request){
        $employee = $request->validate([
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|integer|min:21',
            'phone' => 'required|string|min:9|max:12|regex:/^08[0-9]{7,10}$/',
            'address' => 'required|string|min:10|max:40'
        ]);
        
        $newEmployee = display::create($employee);
        return redirect(route('viewList'))->with('Success', 'Data Added Successfully!');
    }

    public function view(){
        $displayAll = display::all();
        return view('displayList', compact('displayAll'));
    }

    public function viewUpdate(){
        $displayAll = display::all();
        return view('update', compact('displayAll'));
    }

    public function edit(display $data){
        return view('edit', ['data' => $data]);
    }

    public function updateD(display $data, Request $request){
        $employee = $request->validate([
            'name' => 'required|string|min:5|max:20',
            'age' => 'required|integer|min:21',
            'phone' => 'required|string|min:9|max:12|regex:/^08[0-9]{7,10}$/',
            'address' => 'required|string|min:10|max:40'
        ]);
        
        $data->update($employee);
        return redirect(route('viewUpdate'))->with('Success', 'Data Updated Successfully!');
    }

    public function viewDelete(){
        $displayAll = display::all();
        return view('delete', compact('displayAll'));
    }

    public function delete(display $data){
        $data->delete();
        return redirect(route('viewDelete'))->with('Success', 'Data Deleted Successfully!');
    }
}
