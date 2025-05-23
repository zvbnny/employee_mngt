<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class EmployeeController extends Controller
{
    
    public function index(){

        $employees = employee::get();    

        return view('employee.index', compact('employees')); //to display
    }

    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){
        $request ->validate([
            'fname' => 'required|max:255|string',
            'midname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer'
        ]);

    
        employee::create($request->all());

        return view('employee.create');
    }

    public function edit(int $id){
        $employee = employee::findOrFail($id);
        return view('employee.edit', compact('employee'));
    }

    public function update(Request $request, int $id){
        $request ->validate([
            'fname' => 'required|max:255|string',
            'midname' => 'required|max:255|string',
            'lname' => 'required|max:255|string',
            'age' => 'required|integer',
            'address' => 'required|max:255|string',
            'zip' => 'required|integer'
        ]);

        employee::findOrFail($id)->update($request->all());
        return redirect() ->route('employee.index');
    }

    public function delete(int $id){
        $employee = employee::findOrFail($id)->delete();
        return redirect() ->route('employee.index');
    }
}
