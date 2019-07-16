<?php

/*
 * This file is part of the Fxp package.
 *
 * (c) François Pluchino <francois.pluchino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fxp\Component\Config\Loader;

use Doctrine\Common\Annotations\Reader;

/**
 * The abstract class of annotation loader.
 *
 * @author François Pluchino <francois.pluchino@gmail.com>
 */
abstract class AbstractAnnotationLoader
{
    /**
     * @var Reader
     */
    protected $reader;

    /**
     * @var ClassFinder
     */
    protected $classFinder;

    /**
     * Constructor.
     *
     * @param Reader      $reader      The annotation reader
     * @param ClassFinder $classFinder The class finder
     */
    public function __construct(Reader $reader, ClassFinder $classFinder)
    {
        $this->reader = $reader;
        $this->classFinder = $classFinder;
    }
}