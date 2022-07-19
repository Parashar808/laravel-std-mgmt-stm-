<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name= $request->get('name');
        $email= $request->get('email');
        $mobile= $request->get('mobile');
        $gender= $request->get('gender');
        $dob= $request->get('dob');
        // dd($name);
        
        try{
        Student::create([
            'name'=>$name,
            'email'=>$email,
            'mobile'=>$mobile,
            'dob'=>$dob,
            'gender'=>$gender

        ]);
        return redirect()->route('student.index');}

        catch(\Exception $e){
            dd($e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student=Student::find($id);
        return view ('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student=Student::find($id);


        $name= $request->get('name');
        $email= $request->get('email');
        $mobile= $request->get('mobile');
        $gender= $request->get('gender');
        $dob= $request->get('dob');

        $student['name'] = $name;
        $student['email'] = $email;
        $student['mobile']= $mobile;
        $student['gender']=$gender;
        $student['dob']=$dob;



        $student->update();

        return redirect()->route('student.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('student.index');

    }
}
