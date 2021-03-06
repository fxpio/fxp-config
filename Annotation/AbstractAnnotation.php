<?php

/*
 * This file is part of the Fxp package.
 *
 * (c) François Pluchino <francois.pluchino@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fxp\Component\Config\Annotation;

use Fxp\Component\Config\Exception\RuntimeException;

/**
 * @author François Pluchino <francois.pluchino@gmail.com>
 */
abstract class AbstractAnnotation implements AnnotationInterface
{
    /**
     * Constructor.
     *
     * @param array $values The annotation values
     */
    public function __construct(array $values = [])
    {
        foreach ($values as $k => $v) {
            if (!method_exists($this, $name = 'set'.$k)) {
                throw new RuntimeException(sprintf('Unknown key "%s" for annotation "@%s".', $k, \get_class($this)));
            }

            $this->{$name}($v);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getAliasName(): ?string
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function allowArray(): bool
    {
        return false;
    }
}
