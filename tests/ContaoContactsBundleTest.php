<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace SerGroup\ContaoContactsBundle\Tests;

use SerGroup\ContaoContactsBundle\ContaoContactsBundle;
use PHPUnit\Framework\TestCase;

class ContaoContactsBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoContactsBundle();

        $this->assertInstanceOf( 'SerGroup\ContaoContactsBundle\ContaoContactsBundle', $bundle);
    }
}
