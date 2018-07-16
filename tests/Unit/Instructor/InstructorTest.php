<?php
/**
 * Created by PhpStorm.
 * User: sharman4
 * Date: 7/12/18
 * Time: 11:25 PM
 */

namespace Tests\Unit\Instructor;


use App\Course_Section\Course_Section;
use App\Instructor\Instructor;
use Tests\TestCase;

class InstructorTest extends TestCase
{

     private $instructor;
     private $course_section;
     public function setUp()
     {
         parent::setUp();

         $this->course_section = $this->createMock(Course_Section::class);
         $this->instructor = Instructor::getInstructorValues([
             'ins_name' =>'Bob',
              'UniqueId' => 'SboB',
              'section' => $this->course_section
         ]);
     }


     public function testCanBeCreatedFromArray():void
     {
         $this->assertInstanceOf(Instructor::class, $this->instructor);
     }

     public function testCanHaveInstructorName():void
     {
         $this->assertEquals('Bob', $this->instructor->ins_name());
     }
    public function testCanHaveInstructorUniqueId():void
    {
        $this->assertEquals('SboB', $this->instructor->UniqueId());
    }

    public function testCanHaveInstructorSections():void
    {
        $this->assertEquals($this->course_section, $this->instructor->InstructorSection());
    }




}
