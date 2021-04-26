<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\Collection\DependencyInjection;

use Symfony\Bundle\TwigBundle\DependencyInjection\Configuration;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\UX\Collection\Form\CollectionExtension;

/**
 * @author Karoly Gossler <connor@connor.hu>
 *
 * @internal
 */
class CollectionExtension extends Extension implements PrependExtensionInterface
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $container
            ->setDefinition('form.collection.extension', new Definition(CollectionExtension::class))
            ->addTag('form.type_extension')
            ->setPublic(false)
        ;
    }
}
