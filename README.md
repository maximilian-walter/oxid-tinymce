About
=============
This module for the OXID eShop integrates famous TinyMCE into the shop-backend.
It is intended for the community edition, which comes without an WYSIWYG-Editor.

It contains the main package of TinyMCE 3.5.8, but most plugins are disabled. It has a custom plugin for image-uploads.

Requirements
=============
OXID eShop Community Edition 4.7 and above

Installation
=============
As Git Submodule (recommended)
-------------
Go to your shop root-directory and create a new directory called "mwtinymce" in your modules-directory

    mkdir modules/mwtinymce

Add new submodule:

    git submodule add git://github.com/maximilian-walter/oxid-tinymce.git modules/mwtinymce

Manual
-------------
Download the complete repository as ZIP-archive and extract it to the new directory "mwtinymce" in the
modules-directory.

Usage
=============
Before you can use the editor you have to enable it in the backend. Go to "Extensions" -> "Modules" and enable "TinyMCE".
Now the textareas for articles, news and CMS pages get replaced by an TinyMCE instance. To upload images simply click on the "Upload Image" Button.
You can change the upload-directory in the module-settings.

Customization
=============
To change the behaviour of the editor, simply edit "out/blocks/admin_headitem.incjs.tpl". Don't forget to clear the tmp-directory after you changed that file.

License
=============
GNU Lesser General Public License

http://www.gnu.org/licenses/lgpl-3.0.de.html