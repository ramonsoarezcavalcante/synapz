<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
