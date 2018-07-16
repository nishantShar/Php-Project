<?php
/**
 * Created by PhpStorm.
 * User: sharman4
 * Date: 7/12/18
 * Time: 4:43 PM
 */

namespace App\Instructor;
use App\Course_Section\Course_Section;


class Instructor
{
 private $ins_name;
 private $UniqueId;
 private $section;

 public function __construct($ins_name, $UniqueId ,Course_Section $section)
 {
     $this->ins_name =$ins_name;
     $this->UniqueId = $UniqueId;
     $this->section= $section;
 }

 public static function getInstructorValues(array $data): Instructor
 {
     if(!isset($data['ins_name'])){
         throw new \InvalidArgumentException('Instructor name is required');
     }
     elseif(!isset($data['UniqueId'])){
         throw new \InvalidArgumentException('Unique ID of instructor is required');
     }
     elseif(!isset($data['section'])){
         throw new \InvalidArgumentException('Section of instrucotr is required');
     }

     return new Instructor($data['ins_name'], $data['UniqueId'], $data['section']);
 }

 public function ins_name():string
 {
     return $this->ins_name;
 }

 public function UniqueId():string
 {
     return $this->UniqueId;
 }

 public function InstructorSection(): Course_Section
 {
     return $this->section;
 }

// public function Course_Section(Course_Section $section):array
// {
//     $course_sections = [];
//
//     foreach($course_sections as $course)
//     {
//         $course_section[$course] = $this->$section($course) ;
//     }
//     return $course_sections;
// }

}