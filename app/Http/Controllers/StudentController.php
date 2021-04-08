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
        $layout = 'index';
        return view('student', compact('students', 'layout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $layout = 'create';
        return view('student', compact('students', 'layout'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'cne' => 'required',
            'firstName' => 'required|max:255',
            'secondName' => 'required|max:255',
            'age' => 'integer|required|between:7,100',
            'speciality' => 'required|max:255',
        ]);


        $student = new Student();
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->secondName = $request->input('secondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');

        $student->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all();

        $layout = 'show';
        return view('student', compact('students', 'student', 'layout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();

        $layout = 'edit';
        return view('student', compact('students', 'student', 'layout'));
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

        $student = Student::find($id);
        if (!$student) {
            return false;
        }

        $request->validate([
            'cne' => 'required',
            'firstName' => 'required|max:255',
            'secondName' => 'required|max:255',
            'age' => 'integer|required|between:7,100',
            'speciality' => 'required|max:255',
        ]);


        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->secondName = $request->input('secondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');

        $student->save();
        return redirect()->route('home');
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

        if (!$student) {
            back();
        }

        $student->delete();
        return redirect()->route('home');
    }
}
