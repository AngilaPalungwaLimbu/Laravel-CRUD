<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class PageController extends Controller
{
    public function add()
    {
        return view('addStudents');

    }
    public function students()
    {
        $students=Student::all();
        return view('students',compact('students'));

    }
    public function create(Request $request)
    {
        $student =new Student();
        $student->name=$request->name;
        $student->address=$request->address;
        $student->email=$request->email;
        $student->contact=$request->contact;
        $student->course=$request->course;
        $student->remark=$request->remark;
        if(!empty($request->status)){
            $student->status=1;
        }
        else{
            $student->status=0;
        }
        $student->save();
        return redirect('/students');
    }
    public function edit($id)
    {
        $student=Student::find($id);
        return view('edit',compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student=Student::find($id);
        $student->name=$request->name;
        $student->address=$request->address;
        $student->email=$request->email;
        $student->contact=$request->contact;
        $student->course=$request->course;
        $student->remark=$request->remark;
        if(!empty($request->status)){
            $student->status=1;
        }
        else{
            $student->status=0;
        }

        $student->update();
        // toast('Your Post is saved!','success');
        return redirect('/students');
    }
    // public function delete($id){
    //    $student=Student::find($id);
    //    $student->delete();
    //    return redirect()->back();
    // }
}
