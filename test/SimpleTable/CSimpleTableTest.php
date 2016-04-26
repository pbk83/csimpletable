<?php

namespace pbk83\SimpleTable;

/**
 * HTML Form elements.
 *
 */
class CSimpleTableTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Test 
     *
     * @return void
     *
     */
    public function testTableReturn() 
    {
        $el = new \pbk83\SimpleTable\CSimpleTable();

				$el->addHeadings(['Name', 'Age']);
				$el->addRow(['Patrik', '33']);
				
        $res = is_string($el->createTable());
        $exp = true;
        $this->assertEquals($res, $exp, "Generated result is not a string");
    }
}