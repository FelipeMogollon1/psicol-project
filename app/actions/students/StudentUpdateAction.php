<?php

namespace App\actions\students;

use App\Models\Student;

class StudentUpdateAction
{
    public function execute(array $data, Student $student): void
    {
        $student->update($data);
    }
}
