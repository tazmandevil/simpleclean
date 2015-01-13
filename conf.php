<?php
/**
 * License: GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * 
 * configuration file for template "simpleClean"
 * 
 * @author:   Tazmand DeVille
 * @homepage: http://tazmandevil.info
 */

/**
 * This text is placed in "keywords" meta tag
 */
$conf['tpl_simpleClean']['keywords'] = 'dokuwiki,template';

/**
 * This text is placed in "description" meta tag
 */
$conf['tpl_simpleClean']['description'] = 'page description';

/** 
 * This Text is displayed in footer
 * If you remove the wikibar below, a login link might be useful
 */
// $conf['tpl_simpleClean']['footer'] = '<a href="http://tazmandevil.info">home</a> | <a href="http://wiki.tazmandevil.info">wiki</a> | <a href="doku.php?do=login">login</a>';
$conf['tpl_simpleClean']['footer'] = '<a href="http://taz.liberame.org/wiki/doku.php?id=simpleclean">simpleClean dokuwiki template</a> | <a href="doku.php?do=login">login</a>';

/** 
 * Set the menu2 to be permanent (menu2.txt is taken from main directory)
 */
$conf['tpl_simpleClean']['menu2Permanent'] = false;

/** 
 * Displays Wiki Bar (Recent Changes, Old Version, Login)
 */
$conf['tpl_simpleClean']['wikiBar'] = false;

/** 
 * Search Form visibale on page
 */
$conf['tpl_simpleClean']['searchForm'] = true;

//Setup: vim enc=utf-8 tb=4
?>
