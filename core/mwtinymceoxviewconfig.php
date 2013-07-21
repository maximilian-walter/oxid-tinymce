<?php

/**
 * OXID-module "mwtinymce"
 *
 * PHP 5.2
 *
 * @since 07/21/2013
 * @package oxid-modules\mwtinymce
 */

/**
 * Extends oxViewConfig
 *
 * @author Edvinas Kručas <edv.krucas@gmail.com>
 * @since 07/21/2013
 * @package oxid-modules\mwtinymce
 */
class mwtinymceoxviewconfig extends mwtinymceoxviewconfig_parent
{

  /**
   * Determines if TinyMCE editor is enabled in active class.
   *
   * @author Edvinas Kručas <edv.krucas@gmail.com>
   * @since 07/21/2013
   * @return bool
   */
  public function isTinyMceActive() {
    return in_array($this->getActiveClassName(), oxConfig::getInstance()->getConfigParam('aMwTinyMceEnabledClasses'));
  }

}