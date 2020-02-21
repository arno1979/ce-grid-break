<?php

/**
 * @copyright  Arno Schumacher 2020
 * @author     Arno Schumacher
 * @package    GridBreak
 * @license    LGPL-3.0+
 */

namespace Arno1979\GridBreak\ContentElement;

use Contao\ContentModel;
use Contao\CoreBundle\Controller\ContentElement\AbstractContentElementController;
use Contao\CoreBundle\ServiceAnnotation\ContentElement;
use Contao\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GridBreak extends AbstractContentElementController
{
    protected function getResponse(Template $template, ContentModel $model, Request $request): ?Response
    {
        return $template->getResponse();
    }
}
