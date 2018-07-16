<?php
/**
 * Created by PhpStorm.
 * User: sharman4
 * Date: 7/12/18
 * Time: 11:56 PM
 */

namespace Tests\Unit\Students;
use Tests\TestCase;
use App\Course_Section\Course_Section;
use App\Students\Students;


class StudentsTest extends TestCase
{

    private $students;
    private $course_section;
    public function setUp()
    {
        parent::setUp();

        $this->course_section = $this->createMock(Course_Section::class);
        $this->students = Students::getStudentsValues([
            'uniqueId' =>'Bob',
            'name_student' => 'SBob',
            'section' => $this->course_section
        ]);
    }

    public function testCanBeCreatedFromArray():void
    {
        $this->assertInstanceOf(Students::class, $this->students);
    }

    public function testCanHaveStudentUniqueId():void
    {
        $this->assertEquals('Bob', $this->students->uniqueId());
    }
    public function testCanHaveStudentName():void
    {
        $this->assertEquals('SBob', $this->students->name_student());
    }

    public function testCanHaveInstructorSections():void
    {
        $this->assertEquals($this->course_section, $this->students->StudentSection());
    }

}
