<?php
/**
 * @package Portfolio Gallery
 * @author Huge-IT
 * @copyright (C) 2014 Huge IT. All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @website		http://www.huge-it.com/
 * */
defined('_JEXEC') or die('Access Restricted'); ?>
<?php
jimport('joomla.application.component.controllerform');

class PortfoliogalleryControllerVideo extends JControllerForm
{
    function save($key = null, $urlVar = null) {
        $model = $this->getModel();
        $model->save('');
        $this->setRedirect(JRoute::_('index.php?option=com_portfoliogallery', false));
    }

   
}
