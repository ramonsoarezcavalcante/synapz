<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
