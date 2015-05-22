<?php
/**
 * Resources are garbled from PHAR!?
 */
function phar_filter($s) {
    if (strstr($s, "/_media/")) {
        return $s;
    }

    if (strstr($s, ".png") == ".png" ||
	strstr($s, ".ico") == ".ico" ||
	strstr($s, ".gif") == ".gif" ||
	strstr($s, ".jpg") == ".jpg" ||
	strstr($s,  ".js") == ".js"  ||
	strstr($s,  ".ttf") == ".ttf"   ||
	strstr($s,  ".woff") == ".woff"  ||
	strstr($s,  ".woff2") == ".woff2" ||
	strstr($s, ".css") == ".css") {
	return "raw.php";
    }
    return $s;
}

Phar::webPhar(null, "phar.php", "phar.php", array(), "phar_filter");
__HALT_COMPILER();