<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
