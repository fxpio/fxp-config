<?php

/*
 * This file is part of the Fxp package.
 *
 * (c) François Pluchino <francois.pluchino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fxp\Component\Config\Tests\Fixtures\Controller;

use Fxp\Component\Config\Tests\Fixtures\Annotation\MockAnnotation;
use Fxp\Component\Config\Tests\Fixtures\Annotation\MockArrayAnnotation;

/**
 * @author François Pluchino <francois.pluchino@gmail.com>
 *
 * @MockArrayAnnotation
 */
class MockInvalidTypeAnnotationClassAndMethodController
{
    /**
     * @MockAnnotation
     */
    public function fooAction(): void
    {
    }
}
