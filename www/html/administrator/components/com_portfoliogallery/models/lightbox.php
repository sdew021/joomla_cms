<?php
/**
 * @package Portfolio Gallery
 * @author Huge-IT
 * @copyright (C) 2014 Huge IT. All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @website		http://www.huge-it.com/
 * */
defined('_JEXEC') or die;

jimport('joomla.application.component.modeladmin');
jimport('joomla.application.component.helper');

class PortfoliogalleryModelLightbox extends JModelAdmin {

    public function getTable($type = 'Lightbox', $prefix = 'PortfoliogalleryTable', $config = array()) {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getForm($data = array(), $loadData = true) {
        $form = $this->loadForm(
                $this->option . '.lightbox', 'lightbox', array('control' => 'jform', 'load_data' => $loadData)
        );

        if (empty($form)) {
            return false;
        }

        return $form;
    }

    protected function loadFormData() {
        // Проверка сессии на наличие ранее введеных в форму данных.
        $data = JFactory::getApplication()->getUserState($this->option . '.editlightbox.data', array());

        if (empty($data)) {
            $data = $this->getItem();
        }

        return $data;
    }

    function save($data) {

    }

}