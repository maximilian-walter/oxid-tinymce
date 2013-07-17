<?php
/**
 * @copyright C UAB “Net Frequency” 2013
 *
 * This Software is the property of “Net Frequency”
 * and is protected by copyright law – it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license key
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * Contact UAB “Net Frequency”:
 * E-mail: info@nfq.lt
 * http://www.nfq.lt
 *
 */

class mwtinymceoxviewconfig extends mwtinymceoxviewconfig_parent
{
    /**
     * Determines if TinyMCE editor is enabled in active class.
     *
     * @return bool
     */
    public function isTinyMceActive()
    {
        return in_array($this->getActiveClassName(), oxConfig::getInstance()->getConfigParam('aMwTinyMceEnabledClasses'));
    }
}