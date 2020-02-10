<?php

/**
 * @copyright  Arno Schumacher 2020
 * @author     Arno Schumacher
 * @package    PdfFilename
 * @license    LGPL-3.0+
 */

namespace Arno1979\GridBreak;

use Contao\ContentElement;

class ContentGridBreak extends ContentElement
{

    /**
     * Template
     * @var string
     */
    protected $strTemplate = 'ce_grid_break';

    /**
     * Generate content element
     */
    protected function compile() {}
}

?>
