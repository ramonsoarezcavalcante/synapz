<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE9124756B2B4AAQAAAAXAAAABIgAAACABAAAAAAAAAD/xM8CGlVlOSYPgzjTELHpZU4Kg/w/AMuDRMkQExdQpF6fwH7hPpABSNZL5/B6nPeIV9ihZzJKZy6u+SLu181v1J6qgB5EYg7JyMvRNdIhbmhJgJhOydd/OFPPr/ZH6yu6bMuRj252Xp1ssYRN7EG2rzL2NSexnig0MNljan0hKg2uNU5R1y+20TgAAACIAAAAy0oxKg7ViFrFQlvp2gyTNRmJunPt9RRyvAsb/5OOQQ3C3RhhFLaUkbBhlmTxcKQSzz+i69AA5f7ug5zVnZn+WwGdFfYA5E4lZR8bUVpmPs7fAAbcEsthBOWMNxWDXYVU0d3TXt2dTP732L+NjLuKaD3Pui58Ehh4P+lf90hWhzyG27GwEUjFQwcAAACAAAAAd/jZKGS78NMLjljlgL9mOfLylnwA2tlI+2D8wu3GpJ3HfU74uR1T1m2TByp5bQ/kjS2+IjucFoav1V3s/xDH6WNSDXFkPzE2DHMSE37dPTZ8rRfxecXzvDOb6aSW5XGeM9yv4bWdCEh+Oeko+0coC61JyYpsUvoZ98pZwVYvGxxHAAAAgAAAAPqanLGI2n4tRNALZR3lWS0DX77wH5tgWoZTFlviZtaURHoxEaO4grunZJs2RosaLKhYjQpJ+ldbbyp7+SoETgxg4ZcchT7vxpE4hY5+dQEqlgnoX9Hu6KKdwaLBn9W9eFZ21KGvUS9vNWCj8k+O5fnppmKGlutXSBqTnkYlo/S1SAAAAIAAAAAph6EFDNghTvOswpQouPhBGglLAogSSaPOdkITVT2helWGHmLALYKGDUbn1mKcIfVaTbYkUe5CCdCoqgCYrJ6Zrzz58WgL0OwDwt1r3mqYuDs+joOiq6Ckf0X3F9h5CJ0vSRHiz5zZ3xEG4WzODdRO5xvwOxt9+BYkxhlTONnBzkkAAACAAAAAnpiMz0r8acGQA87pjnil4H8DY7XKdqKyQ3BVga1F89lJRC+noBu2cUk9Pi6keBK/OK5A6vlNnk+71/X8glconQkGXGR55WpVa2cs6rYJU9cxdYWc2kqbgd/nTChGDzkoyCU4f8fn01hffhJO0ZcyowIaJLNDb3k3jwhcw47lm2dKAAAAgAAAAD+bxgdIfTzdabHCtX06lQ/U9CZljHUe7JU3g+pTkHfn/EqfaJtrVrRkSJgIcFz9wRXqbOWHqwuIMGQT1M2a/nbRqUREAG8ukvIdLPCgHi1DibDjf8neREjNnnS6wP3+KBwfE9ZLSDNdz6sTUWdCpT5FKICJPIhFFGkwckl3BnsOCAAAAIAAAACp1uJgUdehLQWcbuynAFdgqI4kjbdaGfh1d/XTClzvu3EEoXqS6tjovITM1R45OcIQdNXN7F2P+raFRprJPVhJGLIHRCDuUgz0uli7x0AcviJ3EPU+f1dkvWp9mpVOqoiEoXrDJu87XwrQwxMKRbvo4QYfjGu/4lXEifNUlmueVVEAAAB4AAAAXFIbwZVVsekZrk+HV2KqHgG6uJMYy0jIc4dvivYACOSqhppUv7o6ZZB0vS+mYBOXHJYWJFChH3sn6009OpFQi/dCdNlXR0Pb4ASGE/WXBdJ+MbwWfyJL5cm1ifazHtXe5rZPn9XYdV5odzZ8cd7xCTRzxk9QUZt6AAAAAA==');
