<?php
/**
 * Created by PhpStorm.
 * User: sharman4
 * Date: 7/12/18
 * Time: 4:24 PM
 */

namespace App\Course_Section;
use App\Miami_Term\Miami_Term;
use App\Instructor\Instructor;
use App\Students\Students;


class Course_Section
{
     private $crn;
     private $sub_code;
     private $course_no;
     private $course_title;
     private $term;
     private $instructor;
     private $students;

     public function __construct($crn, $sub_code, $course_no, $course_title, Miami_Term $term, Instructor $instructor,Students $students)
     {
         $this->crn = $crn;
         $this->sub_code = $sub_code;
         $this->course_no = $course_no;
         $this->course_title = $course_title;
         $this->term= $term;
         $this->instructor = $instructor;
         $this->students = $students;

     }

    public static function getSectionValues(array $data): Course_Section
    {
        if(!isset ($data['crn'])){
            throw new \InvalidArgumentException('CRN is required for the course');
        }
        elseif(!isset ($data['sub_code'])){
            throw new \InvalidArgumentException('Subject Code is required for the course');
        }
        elseif(!isset ($data['course_no'])){
            throw new \InvalidArgumentException('Course Number is required for the course');
        }
        elseif(!isset ($data['course_title'])){
            throw new \InvalidArgumentException('Course Title is required for the course');
        }
        elseif(!isset ($data['term'])){
            throw new \InvalidArgumentException('Term is required for the course');
        }
        elseif(!isset ($data['instructor'])){
            throw new \InvalidArgumentException('Instructorr is required for the course');
        }
        elseif(!isset ($data['students'])){
            throw new \InvalidArgumentException('Students is required for the course');
        }
        return new Course_Section($data['crn'],$data['sub_code'],$data['course_no'],$data['course_title'],
            $data['term'],$data['instructor'],$data['students']);
    }

     public function crn():string
     {
         return $this->crn;
     }

     public function sub_code():string
     {
         return $this->sub_code;
     }

     public function course_no():string
     {
         return $this->course_no;
     }

     public function course_title():string
     {
         return $this->course_title;
     }

     public function term():Miami_Term
     {
         return $this->term;
     }

     public function instructor():Instructor
     {
         return $this->instructor;
     }

     public function students():Students
     {
         return $this->students;
     }
}