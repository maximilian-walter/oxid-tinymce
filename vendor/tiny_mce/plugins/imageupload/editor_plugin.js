/**
 * editor_plugin.js
 *
 * Copyright 2013, Maximilian Walter
 * Released under LGPL License.
 *
 * License: http://www.gnu.org/licenses/lgpl-3.0.de.html
 */

(function(){tinymce.PluginManager.requireLangPack('imageupload');tinymce.create('tinymce.plugins.ImageUploadPlugin',{init:function(ed,url){ed.addCommand('mceImageUpload',function(){ed.windowManager.open({file:ed.getParam("plugin_imageupload_upload_script"),inline:0,width:400,height:100},{plugin_url:url})});ed.addButton('imageupload',{title:'imageupload.upload_image',image:url+'/img/upload-image.png',cmd:'mceImageUpload'})},getInfo:function(){return{longname:'Simple Image Upload for OXID eShop',author:'Maximilian Walter',version:'1.0.0'}}});tinymce.PluginManager.add('imageupload',tinymce.plugins.ImageUploadPlugin)})();