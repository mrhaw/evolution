<?php
/**
 * Filename:       assets/plugins/tinymce/lang/german.inc.php
 * Function:       German language file for TinyMCE
 * Encoding:       UTF-8
 * Author:         Jeff Whitfield and Marc Hinse
 * Date:           2014/02/01
 * Version:        3.5.10
 * MODX version:   0.9.5-1.0.13
*/

$_lang['mce_editor_theme_title'] = 'Template:';
$_lang['mce_editor_theme_message'] = 'Hier können Sie ein Template aussuchen, das im TinyMCE verwendet werden soll. Es handelt sich nicht um das Aussehen, sondern um die Anzahl an Plugins/Funktionen (wie Bilder hochladen, Links einfügen etc.), die für den Nutzer verfügbar sein sollen.';
$_lang['mce_editor_custom_plugins_title'] = 'Individuelle Plugins:';
$_lang['mce_editor_custom_plugins_message'] = 'Geben Sie die Plugins an, die Sie bei Auswahl des \'individuellen\' Templates verwenden wollen. Bitte Plugins durch Komma trennen.';
$_lang['mce_editor_custom_buttons_title'] = 'Individuelle Buttons:';
$_lang['mce_editor_custom_buttons_message'] = 'Geben Sie die Buttons an, die Sie bei Auswahl des \'individuellen\' Templates verwenden wollen. Bitte Buttons für jede Reihe durch Komma trennen.Stellen Sie sicher, dass die für Buttons benötigten Plugins aktiviert sind unter \'Individuelle Plugins\'.';
$_lang['mce_editor_css_selectors_title'] = 'CSS Selektoren:';
$_lang['mce_editor_css_selectors_message'] = 'Hier können Sie eine Auswahl an Selektoren definieren, die im TinyMCE verfügbar sein sollen. Bitte so eintragen:<br />'displayName=selectorName;displayName2=selectorName2'<br />Zum Beispiel mit <b>.mono</b> und <b>.smallText</b> als Selektoren in der CSS Datei, tragen Sie diese ein als:<br />'Monospaced text=mono;Small text=smallText'<br />Bitte achten Sie darauf, dass der letzte Eintrag nicht mit Semikolon abgeschlossen werden darf.';
$_lang['mce_settings'] = 'TinyMCE Einstellungen';
$_lang['mce_theme_simple'] = 'Wenige Plugins';
$_lang['mce_theme_full'] = 'Komplett';
$_lang['mce_theme_advanced'] = 'Mittlere Anzahl Plugins';
$_lang['mce_theme_editor'] = 'Alle Plugins';
$_lang['mce_theme_custom'] = 'Individuell';
$_lang['mce_theme_creative'] = 'Kreativ';
$_lang['mce_theme_logic'] = 'XHTML';
$_lang['mce_theme_legacy'] = 'Veralteter Stil';
$_lang['mce_theme_global_settings'] = 'Verwenden Sie die globale Einstellung';
$_lang['mce_editor_skin_title'] = 'Oberfäche';
$_lang['mce_editor_skin_message'] = 'Gestaltung der Symbolleiste. Siehe tinymce/tiny_mce/themes/advanced/skins/<br />';
$_lang['mce_editor_entermode_title'] = 'Eingabetasten-Modus';
$_lang['mce_editor_entermode_message'] = 'Zeichen, die nach dem Drücken der Eingabetaste erzeugt werden.';
$_lang['mce_entermode_opt1'] = 'Umgeben mit &lt;p&gt;&lt;/p&gt;';
$_lang['mce_entermode_opt2'] = 'Einfügen von &lt;br /&gt;';

$_lang['mce_element_format_title'] = 'Code-Format';
$_lang['mce_element_format_message'] = 'Mit dieser Einstellung können Sie aktivieren, ob der HTML-Code als HTML oder als XHTML erzeugt wird. Die Standardeinstellung ist XHTML. Im HTML Modus werden z.B. statt &lt;br /&gt;-Tags nur &lt;br&gt;-Tags erzeugt.';
$_lang['mce_schema_title'] = 'Schema';
$_lang['mce_schema_message'] = 'Mit dieser Einstellung können Sie zwischen dem HTML4 und HTML5 Schema umstellen. Damit können Sie steuern, welche Elemente und Attribute im HTML-Code eingegeben werden dürfen.';

$_lang['mce_toolbar1_msg'] = 'Standard-Einstellung: undo,redo,|,bold,forecolor,backcolor,strikethrough,formatselect,fontsizeselect, pastetext,pasteword,code,|,fullscreen,help';
$_lang['mce_toolbar2_msg'] = 'Standard-Einstellung: image,media,link,unlink,anchor,|,justifyleft,justifycenter,justifyright,|,bullist, numlist,|,blockquote,outdent,indent,|,table,hr,|,template,visualblocks,styleprops,removeformat';

$_lang['mce_tpl_title'] = 'Template button';
$_lang['mce_tpl_msg'] = 'You can insert the HTML block which you registered beforehand from toolbar. You make HTML block as resource or a chunk, and can appoint plural number with a comma.';
$_lang['mce_tpl_docid'] = 'Resource IDs';
$_lang['mce_tpl_chunkname'] = 'Chunk names';