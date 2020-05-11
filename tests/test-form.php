<?php

use JPToolkit\HtmlHelper\Form;

class TestForm extends WP_UnitTestCase {

  /**
   * Test input fields
   *
   * @since 1.1.0
   */
  function test_input() {
    // Check field types
    $this->assertEquals( Form::input(), '<input value="" type="text" />' );
    $this->assertEquals( Form::text(), '<input value="" type="text" />' );
    $this->assertEquals( Form::email(), '<input value="" type="email" />' );
    $this->assertEquals( Form::file(), '<input value="" type="file" />' );
    $this->assertEquals( Form::hidden(), '<input value="" type="hidden" />' );
    $this->assertEquals( Form::number(), '<input value="" type="number" />' );
  }

  /**
   * Test textarea field
   *
   * @since 1.1.0
   */
  function test_textarea() {
    // Empty textarea
    $this->assertEquals( Form::textarea(), '<textarea></textarea>' );
  }

  /**
   * Test select field
   *
   * @since 1.1.0
   */
  function test_select() {
    // Single option
    // Empty
    $this->assertEquals( Form::option( '' ), '' );

    // Options builder
    // Empty
    $this->assertEquals( Form::options( '' ), '' );
    $this->assertEquals( Form::options( [] ), '' );

    // Options builder shorthands
    // months
    $result = '<option value="01">January</option>'
            . '<option value="02">February</option>'
            . '<option value="03">March</option>'
            . '<option value="04">April</option>'
            . '<option value="05">May</option>'
            . '<option value="06">June</option>'
            . '<option value="07">July</option>'
            . '<option value="08">August</option>'
            . '<option value="09">September</option>'
            . '<option value="10">October</option>'
            . '<option value="11">November</option>'
            . '<option value="12">December</option>';
    $this->assertEquals( Form::options( 'months' ), $result );

    // weekdays
    $result = '<option value="0">Sunday</option>'
            . '<option value="1">Monday</option>'
            . '<option value="2">Tuesday</option>'
            . '<option value="3">Wednesday</option>'
            . '<option value="4">Thursday</option>'
            . '<option value="5">Friday</option>'
            . '<option value="6">Saturday</option>';
    $this->assertEquals( Form::options( 'weekdays' ), $result );
  }

}
