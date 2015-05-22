# DokuWiki PHAR

DokuWiki addon to use it as single file installation (PHAR).

Current PHP installations allow to use PHAR files as virtual directories. These files may contain, PHP, JS, GIF and other resources files and accessed (mostly) transparently by PHP code.

This project is a collection of files for DokuWiki to allow it to be served from single file.
Currenly only supporting serving from /wiki prefix.

1) Building PHAR

PHAR supports using ZIP (renamed to PHAR). Startup entry specified in file .phar/stub.php.
So for building just ZIP resulting dir and name it index.phar.

## Dirs and files from dokuwiki.tar.gz:

   > bin/
   > lib/
   > inc/
   > *.php

## Dirs and files from this project:

   > *.php
   > data/
   > inc/ (if you want to be able to modify configuration from web-interface)
   > conf/ (if you want your config READ-ONLY)
   > .phar/

Create zip from resulting directory and rename it to index.phar.

2) Preparing Apache httpd 2.x

Apache module mod_rewrite must be enabled. Add following to httpd.conf:

  AddType application/x-httpd-php .phar
  DirectoryIndex index.phar
  AllowOverride all
  
Create directory /wiki under DocumentRoot

3) Place ht.access as .htaccess to /wiki

4) Place index.phar to /wiki

5) Create data directory in /wiki using following command

   mkdir -m 0777 -p data/pages data/attic data/index data/locks data/media data/media_attic data/media_meta data/
meta data/tmp data/cache 

6) If you want your wiki to be configurable from web-interface

## Copy conf/ directory from this project to /wiki folder.

## Make it writable

   chmod a+rwx conf; chmod a+rw conf/*.php

7) Ready!

You are ready to use DokuWiki. Your wiki is already requires login. **Username is admin**. **Password is 123**.

