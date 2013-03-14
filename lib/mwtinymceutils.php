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
 * Utility-Class
 *
 * @author Maximilian Walter <mail@max-walter.net>
 * @since 02/22/2013
 * @package oxid-modules\mwtinymce
 */
class MwTinyMceUtils
{

  /**
   * Cleanup after deactivation
   *
   * @author Maximilian Walter <mail@max-walter.net>
   * @since 02/22/2013
   * @return void
   */
  public static function onDeactivate() {
    oxDb::getDb()->execute("DELETE FROM `oxtplblocks` WHERE `OXMODULE` = 'mwtinymce';");
  }

}