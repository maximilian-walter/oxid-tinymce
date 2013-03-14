<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Image-Upload</title>
    </head>
<body>
[{if $success}]
<script type="text/javascript" src="[{$oViewConf->getModuleUrl('mwtinymce', 'vendor/tiny_mce/tiny_mce_popup.js')}]"></script>
<script type="text/javascript">
    var ImageDialog = {
        init : function(ed) {
            ed.execCommand('mceInsertContent', false,
                    tinyMCEPopup.editor.dom.createHTML('img', {
                        src : '[{$image}]'
                    })
            );

            tinyMCEPopup.editor.execCommand('mceRepaint');
            tinyMCEPopup.editor.focus();
            tinyMCEPopup.close();
        }
    };
    tinyMCEPopup.onInit.add(ImageDialog.init, ImageDialog);
</script>
[{else}]
<form action="[{$oViewConf->getSelfLink()}]cl=mwtinymce_upload&amp;fnc=save" method="post" enctype="multipart/form-data">
    <input id="image-upload" accept="image/*" type="file" name="image" onchange="this.parentElement.submit()" />
    <input type="submit" />
</form>
[{/if}]
</body>
</html>