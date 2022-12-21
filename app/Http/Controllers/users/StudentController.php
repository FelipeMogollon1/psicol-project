<?php

namespace App\Http\Controllers\users;

use App\actions\students\StudentStoreAction;
use App\actions\students\StudentUpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\StudentValidationRequest;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StudentController extends Controller
{

    public function index(): View
    {
        $students = Student::paginate(10);

        return view('users.students.index', compact('students'));
    }

    public function create()
    {
        return view('users.students.create');
    }

    public function store(StudentValidationRequest $request, StudentStoreAction $studentStoreAction)
    {
        $student = $studentStoreAction->execute($request->all());

        return redirect()->route('students.index', compact('student'));
    }

    public function show($id)
    {
        //
    }

    public function edit(Student $student)
    {
        return view('users.students.edit', compact('student'));
    }


    public function update(Request $request, StudentUpdateAction $studentUpdateAction, Student $student)
    {
        $studentUpdateAction->execute($request->all(),$student);

        return redirect()->route('students.index');

    }


    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }
}
