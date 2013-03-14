<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
  'id'          => 'mwtinymce',
  'title'       => 'TinyMCE',
  'description' => array(
    'en' => 'Integrates the TinyMCE-editor into the OXID backend',
    'de' => 'Integriert den TinyMCE-Editor in das OXID-Backend',
  ),
  'version'     => '1.0.0',
  'author'      => 'Maximilian Walter',
  'email'       => 'mail@max-walter.net',
  'url'         => 'http://max-walter.net/',
  'extend'      => array(),
  'files'       => array(
    'MwTinyMceUtils' => 'mwtinymce/lib/mwtinymceutils.php',
    'mwtinymce_upload' => 'mwtinymce/application/controllers/admin/mwtinymce_upload.php',
  ),
  'templates' => array(
    'mwtinymce_upload.tpl' => 'mwtinymce/application/views/admin/mwtinymce_upload.tpl',
  ),
  'blocks' => array(
    array('template' => 'headitem.tpl', 'block' => 'admin_headitem_incjs', 'file' => '/out/blocks/admin_headitem_incjs.tpl'),
  ),
  'settings' => array(
    array('group' => 'mwtinymce', 'name' => 'sMwTinyMceUploadDir', 'type' => 'str', 'value' => 'pictures/wysiwigpro'),
  ),
  'events'       => array(
    'onDeactivate' => 'MwTinyMceUtils::onDeactivate'
  ),
);