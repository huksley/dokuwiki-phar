<?php
define('DOKU_CONF',$_SERVER["DOCUMENT_ROOT"] . '/wiki/conf/');

$config_cascade = array(
    'main' => array(
        'default'   => array(DOKU_INC.'conf/dokuwiki.php'),
        'local'     => array(DOKU_CONF.'local.php'),
        'protected' => array(DOKU_CONF.'local.protected.php'),
    ),
    'acronyms'  => array(
        'default'   => array(DOKU_INC.'conf/acronyms.conf'),
        'local'     => array(DOKU_CONF.'acronyms.local.conf'),
    ),
    'entities'  => array(
        'default'   => array(DOKU_INC.'conf/entities.conf'),
        'local'     => array(DOKU_CONF.'entities.local.conf'),
    ),
    'interwiki' => array(
        'default'   => array(DOKU_INC.'conf/interwiki.conf'),
        'local'     => array(DOKU_CONF.'interwiki.local.conf'),
    ),
    'license' => array(
        'default'   => array(DOKU_INC.'conf/license.php'),
        'local'     => array(DOKU_CONF.'license.local.php'),
    ),
    'mediameta' => array(
        'default'   => array(DOKU_INC.'conf/mediameta.php'),
        'local'     => array(DOKU_CONF.'mediameta.local.php'),
    ),
    'mime'      => array(
        'default'   => array(DOKU_INC.'conf/mime.conf'),
        'local'     => array(DOKU_CONF.'mime.local.conf'),
    ),
    'scheme'    => array(
        'default'   => array(DOKU_INC.'conf/scheme.conf'),
        'local'     => array(DOKU_CONF.'scheme.local.conf'),
    ),
    'smileys'   => array(
        'default'   => array(DOKU_INC.'conf/smileys.conf'),
        'local'     => array(DOKU_CONF.'smileys.local.conf'),
    ),
    'wordblock' => array(
        'default'   => array(DOKU_INC.'conf/wordblock.conf'),
        'local'     => array(DOKU_CONF.'wordblock.local.conf'),
    ),
    'acl'       => array(
        'default'   => DOKU_CONF.'acl.auth.php',
    ),
    'plainauth.users' => array(
        'default'   => DOKU_CONF.'users.auth.php',
    ),
    'plugins' => array( // needed since Angua
        'default'   => array(DOKU_INC.'conf/plugins.php'),
        'local'     => array(DOKU_CONF.'plugins.local.php'),
        'protected' => array(
            DOKU_INC.'conf/plugins.required.php',
            DOKU_CONF.'plugins.protected.php',
        ),
    ),
    'userstyle' => array(
        'screen'  => DOKU_CONF.'userstyle.css',
        'print'   => DOKU_CONF.'userprint.css',
        'feed'    => DOKU_CONF.'userfeed.css',
        'all'     => DOKU_CONF.'userall.css',
    ),
    'userscript' => array(
        'default' => DOKU_CONF.'userscript.js'
    ),
);
