<?php

namespace Tests\Unit\Helpers;

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_Email()
    {
        $email = 'i@admin.com';
        $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);

        $this->assertTrue($result);
    }
}
