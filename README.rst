simpleClean
=======

simpleClean is clean and simple template for DokuWiki_ (standards compliant and 
simple Wiki engine written in PHP). Template has many customizable options 
including menu, keywords and description. 

.. _DokuWiki: http://www.dokuwiki.org

.. image:: http://taz.liberame.org/wiki/lib/exe/fetch.php?media=webhax:101513171245.jpg
   :align: center

simpleClean has the following features 

  - Menu and Sidebar Menu - customizable menu, that is displayed on every page
  - Description - user defined meta tag for every generated page


Selected Users:
=============================

  - http://taz.liberame.org/wiki/

Installation
=============================

  1. Download the simpleClean template zip-file
  #. Unpack it into *<dokuwiki>/lib/tpl/* directory
  #. Change template parameter to simpleClean in *<dokuwiki>/conf/local.php* file

    :: 

      $conf['template'] = 'simpleClean';


Configuration
=============================
Configuration parameters are located in *<dokuwiki>/lib/tpl/simpleclean/conf.php* 
PHP file.

============== ================================================================
Parameter      Description
============== ================================================================
description    Description META tag. This tag is inserted on every rendered page
footer         Text that is inserted in the footer
menu2Permanent menu2 is permanent (it is taken from main directory)
wikiBar        Display Wikibar (Recent Changes, Old Version, Login)
============== ================================================================


File structure
=============================

  ::
 
    + pages
    |-- menu1.txt      [1]
    |-- start.txt
    |-+ projects      
      |-- menu1.txt    [1]
      |-- menu2.txt    [2]
      |-- simpleClean 


menu1.txt
------------------------------
menu1.txt file is displayed on every generated web page and it contains main menu
content.

  :: 
  
    * [[/|Blog]] 
    * [[photography|Photography]] 
    * [[projects|Software]]
    * [[articles|Design]]


menu2.txt
------------------------------
menu2.txt file is displayed on every generated web page and it constains sidebar menu content.

  ::
  
    * __DokuWiki__
    * [[:sofwtare/simpleClean|simpleClean]]

    * __Web Development__
    * [[:design/modelarstwo|Modelartstwo]]


Download
=======================================

simpleClean releases are available for download from 
http://github.com/tazmandevil/simpleclean


Source Code
=======================================

Source code is available on http://github.com/tazmandevil/simpleclean


Changelog
================================

Version 0.1 - released 15 October 2013

Authors
=======

 - Tazman DeVille - http://taz.liberame.org
