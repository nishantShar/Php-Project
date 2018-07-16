<?php
/**
 * Created by PhpStorm.
 * User: sharman4
 * Date: 7/13/18
 * Time: 9:24 AM
 */

namespace Tests\Unit\Course_SectionTest;
use App\Course_Section\Course_Section;
use App\Instructor\Instructor;
use App\Miami_Term\Miami_Term;
use App\Students\Students;
use Tests\TestCase;


class Course_SectionTest extends TestCase
{


    private $miami_term;
  private $course_section;
  private $instructor;
  private $students;

  public function setUp()
  {
      parent::setUp();

      $this->miami_term = $this->createMock(Miami_Term::class);
      $this->instructor = $this->createMock(Instructor::class);
      $this->students = $this->createMock(Students::class);
      $this->course_section = Course_Section::getSectionValues([
          'crn' => '34562',
          'sub_code' => 'oop',
          'course_no' => '111',
          'course_title' => 'object oriented programming',
          'term' => $this->miami_term,
          'instructor' => $this->instructor,
          'students' => $this->students

      ]);
  }


      public function testCanBeCreatedFromArray():void
  {
      $this->assertInstanceOf(Course_Section::class, $this->course_section);
  }

  public function testCanHaveCrn():void
  {
      $this->assertEquals('34562', $this->course_section->crn());
  }

   public function testCanHaveSubCode():void
   {
       $this->assertEquals('oop', $this->course_section->sub_code());
   }

   public function testCanHaveCourseNo():void
   {
       $this->assertEquals('111', $this->course_section->course_no());

   }

   public function testCanHaveCourseTitle():void
   {
       $this->assertEquals('object oriented programming', $this->course_section->course_title());
   }

   public function testCanHaveTerm():void
   {
       $this->assertEquals($this->miami_term, $this->course_section->term());
   }

   public function testCanHaveInstructor():void
   {
       $this->assertEquals($this->instructor, $this->course_section->instructor());
   }

   public function testCanHaveStudents():void
  {
     $this->assertEquals($this->students, $this->course_section->students());
  }
}
