<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\Collection\Form;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

/**
 * @author Karoly Gossler <connor@connor.hu>
 *
 * @final
 * @experimental
 */
class CollectionExtension extends AbstractTypeExtension
{
    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        $controller = 'form-collection';
        
        if (!isset($view->vars['data-controller'])) {
            $view->vars['data-controller'] = '';
        }
        
        $view->vars['data-controller'] = trim($view->vars['data-controller'].' '.$controller);
    }
    
    /**
     * Return the class of the type being extended.
     */
    public static function getExtendedTypes(): iterable
    {
        // return FormType::class to modify (nearly) every field in the system
        return [CollectionType::class];
    }
}
