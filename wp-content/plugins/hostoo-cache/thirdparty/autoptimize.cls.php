<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
