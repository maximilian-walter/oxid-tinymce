[{$smarty.block.parent}]
[{if $oViewConf->isTinyMceActive()}]
<script type="text/javascript" src="[{$oViewConf->getModuleUrl('mwtinymce', 'vendor/tiny_mce/tiny_mce.js')}]"></script>
<script type="text/javascript">
    (function() {
        tinyMCE.init({
            // General options
            mode : "textareas",
            theme : "advanced",
            plugins : "autolink,lists,table,media,searchreplace,contextmenu,paste,wordcount,imageupload",

            language : "[{php}]echo oxRegistry::getLang()->getLanguageAbbr(oxRegistry::getSession()->getVar('tpllanguage'));[{/php}]",

            relative_urls : false,
            forced_root_block: false,
            remove_linebreaks : false,

            // Theme options
            theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,sub,sup,|,justifyleft,justifycenter,justifyright,justifyfull,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,imageupload,media,code,charmap,|,forecolor,backcolor",
            theme_advanced_buttons3 : "tablecontrols",
            theme_advanced_toolbar_location : "top",
            theme_advanced_toolbar_align : "left",
            theme_advanced_statusbar_location : "bottom",
            theme_advanced_resizing : true,

            plugin_imageupload_upload_script : '[{$oViewConf->getSelfLink()|html_entity_decode}]cl=mwtinymce_upload'
        });

        YAHOO.util.Event.onDOMReady(function() {
            window.copyLongDesc = (function() {
                var tmp = copyLongDesc;

                return function() {
                    tinyMCE.triggerSave();
                    tmp.apply(window, arguments);
                }
            })();
        });
    })();
</script>
[{/if}]