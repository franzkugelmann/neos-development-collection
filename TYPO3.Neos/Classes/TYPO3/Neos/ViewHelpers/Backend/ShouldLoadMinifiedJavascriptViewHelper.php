<?php
namespace TYPO3\Neos\ViewHelpers\Backend;

/*
 * This file is part of the TYPO3.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\FluidAdaptor\Core\ViewHelper\AbstractViewHelper;
use TYPO3\Neos\Utility\BackendAssetsUtility;

/**
 * Returns TRUE if the minified Neos JavaScript sources should be loaded, FALSE otherwise.
 */
class ShouldLoadMinifiedJavascriptViewHelper extends AbstractViewHelper
{
    /**
     * @see AbstractViewHelper::isOutputEscapingEnabled()
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * @Flow\Inject
     * @var BackendAssetsUtility
     */
    protected $backendAssetsUtility;

    /**
     * @return boolean
     */
    public function render()
    {
        return $this->backendAssetsUtility->shouldLoadMinifiedJavascript();
    }
}
