<?php
/**
 * An AlphaLemonCms Block
 */

namespace AlphaLemon\Block\BootbusinessProductBlockBundle\Core\Block;

use AlphaLemon\AlphaLemonCmsBundle\Core\Content\Block\AlBlockManager;

/**
 * Description of AlBlockManagerBootbusinessProductBlock
 */
class AlBlockManagerBootbusinessMemberBlock extends AlBlockManager
{
    public function getDefaultValue()
    {
        return array('Content' => '');
    }
    
    protected function renderHtml()
    {
        return array('RenderView' => array(
            'view' => 'BootbusinessProductBlockBundle:Partner:partner.html.twig',
        ));
    }
}
