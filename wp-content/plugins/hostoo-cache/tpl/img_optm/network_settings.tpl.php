<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
