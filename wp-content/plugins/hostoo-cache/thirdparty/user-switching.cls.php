<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
