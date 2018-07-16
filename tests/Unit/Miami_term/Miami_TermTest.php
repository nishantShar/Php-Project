<?php
/**
 * Created by PhpStorm.
 * User: sharman4
 * Date: 7/12/18
 * Time: 11:10 PM
 */

namespace Tests\Unit\Miami_term;
use App\Miami_Term\Miami_Term;
use Tests\TestCase;

class Miami_TermTest extends TestCase
{
    /** @var Miami_Term */

    private $miami_term;

    public function setUp()
    {
        parent::setUp();
        $this->miami_term = Miami_Term::getMiamiValues([
            'term_name' => 'Fall 2018-2019',
            'term_code'=> '32465'
        ]);
    }

    public function testCanBeCreatedFromArray():void
    {
        $this->assertInstanceOf(Miami_Term::class, $this->miami_term);
    }

     public function testCanGetTermName():void
     {
         $this->assertEquals('Fall 2018-2019', $this->miami_term->term_name());
     }
     public function testCanGetTermCode():void
     {
         $this->assertEquals('32465', $this->miami_term->term_code());
     }
}
