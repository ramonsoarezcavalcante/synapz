<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
