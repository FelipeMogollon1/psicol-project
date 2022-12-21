<?php

namespace App\actions\students;

use App\Models\Student;

class StudentStoreAction
{
    public function execute(array $data): Student
    {
        $student = Student::create($data);

        return $student;
    }
}
