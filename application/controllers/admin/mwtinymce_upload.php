<?php

/**
 * OXID-module "mwtinymce"
 *
 * PHP 5.2
 *
 * @since 02/22/2013
 * @package oxid-modules\mwtinymce
 */

/**
 * Image-Upload
 *
 * @author Maximilian Walter <mail@max-walter.net>
 * @since 02/22/2013
 * @package oxid-modules\mwtinymce
 */
class MwTinyMce_Upload extends oxAdminDetails
{

  /**
   * Renders the form
   *
   * @author Maximilian Walter <mail@max-walter.net>
   * @since 02/22/2013
   * @return string
   */
  public function render() {
      parent::render();

      return "mwtinymce_upload.tpl";
  }

  /**
   * Saves the image
   *
   * @author Maximilian Walter <mail@max-walter.net>
   * @since 02/22/2013
   * @return void
   */
  public function save() {
    $oConfig = oxRegistry::getConfig();

    $aImage = $oConfig->getUploadedFile('image');
    if ($aImage['name']) {
      try {
        $sUploadDir = $oConfig->getConfigParam('sMwTinyMceUploadDir');

        if (empty($sUploadDir)) {
          throw new Exception('Upload-directory is not configured');
        }

        $sImageUrl = oxUtilsFile::getInstance()->processFile('image', $oConfig->getOutDir(false) . $sUploadDir);

        if ($sImageUrl) {
          $this->_aViewData['success'] = true;
          $this->_aViewData['image'] = $oConfig->getUrl($sImageUrl, $sUploadDir, false, false);
        }
      }
      catch (Exception $e) {
        oxUtilsView::getInstance()->addErrorToDisplay($e->getMessage());
      }
    }
  }

}
