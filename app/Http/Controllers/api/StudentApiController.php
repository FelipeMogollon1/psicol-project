<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class StudentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): ResourceCollection
    {
        return StudentResource::collection(Student::paginate());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request): JsonResponse
    {
        $student = new Student();

        $student->document = $request['document'];
        $student->name = $request['name'];
        $student->email = $request['email'];
        $student->last_name = $request['last_name'];
        $student->phone_number = $request['phone_number'];
        $student->address = $request['address'];
        $student->city = $request['city'];

        $student->save();

        return StudentResource::make($student)->response()->setStatusCode(201);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return StudentResource|\Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $student->document = $request['document'];
        $student->name = $request['name'];
        $student->last_name = $request['last_name'];
        $student->phone_number = $request['phone_number'];
        $student->address = $request['address'];
        $student->city = $request['city'];

        $student->save();

        return StudentResource::make($student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return response(null, 204);
    }
}
