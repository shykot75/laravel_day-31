<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $student;

    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Bob';
        $this->student->email = 'bob@email.com';
        $this->student->mobile = '0987654321';
        $this->student->save();
    }

    public static function getAllStudent()
    {
        return [
            0 => [
                'id'     => 1,
                'name'   => 'tom',
                'email'  => 'tom@email.com',
                'mobile' => '0987654321',
                'image'  => '',
            ],
            1 => [
                'id'     => 2,
                'name'   => 'bob',
                'email'  => 'bob@email.com',
                'mobile' => '0987654321',
                'image'  => '',
            ],
        ];
    }
}
