<?php
/**
 * Created by PhpStorm.
 * User: sharman4
 * Date: 7/12/18
 * Time: 4:43 PM
 */

namespace App\Students;
use App\Course_Section\Course_Section;


class Students
{

    private $uniqueId;
    private $name_student;
    private $section;

    public function __construct($uniqueId, $name_student,Course_Section $section)
    {
        $this->uniqueId = $uniqueId;
        $this->name_student = $name_student;
        $this->section = $section;
    }

    public static function getStudentsValues(array $data): Students
    {
        if(!isset($data['uniqueId'])){
            throw new \InvalidArgumentException('student unique Id is required');
        }
        elseif(!isset($data['name_student'])){
            throw new \InvalidArgumentException('Name of student is required');
        }
        elseif(!isset($data['section'])){
            throw new \InvalidArgumentException('Section of student is required');
        }

        return new Students($data['uniqueId'], $data['name_student'], $data['section']);
    }


    public function uniqueId(): string
    {
        return $this->uniqueId;
    }

    public function name_student():string
    {
       return $this->name_student;
    }

    public function StudentSection(): Course_Section
    {
        return $this->section;
    }

//    public function Course_Section(Course_Section $section):array
//    {
//        $course_sections = [];
//
//        foreach($course_sections as $course)
//        {
//            $course_sections[$course] = $this->$section($course) ;
//        }
//        return $course_sections;
//    }
}