<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('08FBE9124756B2B4AAQAAAAXAAAABIgAAACABAAAAAAAAAD/xM8CGlVlOSYPgzjTELHpZU4Kg/w/AMuDRMkQExdQpF6fwH7hPpABSNZL5/B6nPeIV9ihZzJKZy6u+SLu181v1J6qgB5EYg7JyMvRNdIhbmhJgJhOydd/OFPPr/ZH6yu6bMuRj252Xp1ssYRN7EG2rzL2NSexnig0MNljan0hKg2uNU5R1y+20TgAAABoCgAAAjfJd8RXi7xn91s9M8XhpE0gdv5FY198gYh0qobdz1bDDuYw28+taiYhQY3MBSeodAPJyO9S5DZAYQ04z0v1ZWRkI4I3Z9HoUuOg+8XZxZa6XEAreTBkQFdlrMywd9cB9UpN1VOFO5VXLxF/nRU5Sde7ufEtDWRhmY0d3OHfq4EelCGDwypmnQg+os7vnz87MZZFREeD7vEniMcWvIzABl9N25dYaPuXiBbHu6fbvDyh8wank+QMtiPjuynfqMmJiRxfTktYq4N4E73fWMGubxl+MprjYj8OBv38iSAywVgnA4zGJU6zh52lJFOyxP7tgCMdF+eZVrKA/uxqLUFZnDOncCWzNd9kslFH7zvqEpohHC/8ASuVLfvsu/McaauAwF89IeEbnnfaZ42+gMxXBg8po//tftplLbhgGl6d6jqVeCABc8lD5BgoO9fvW0ZHrDLHKi0gT0khAvT39sdAye0EtdEiS/uKBhDhzF9GMSOpQyCZaZ3HHKheMGZxMVGPbPQMjQQ5+YLQWZOn6mFXuhWvvKv+/ig/guk52oGA/bO/+r8UB8G26pBeM3nSSTEwVagJL3g2oWHq4RFFy56vbzLrDP9MnJTMxge/WYRpApcO9umdwtoHk7mtK5VoRpAE6LeDwwQa8g8uPgJoNZRzy7quQ6DBO2wyFn3YXaCX6QwJSy+ofrloCofzwYGXegSb7UaALkaHlOtzScFIHa+5TO1Iax7I9Y/pdGYnPEfbqfklD5KJfc5nJ3/W3DW9xLzIKIT95xb8HQcAkMAlny1XL4jf5QToxBfwSglHzjuJgK0+6KXsxZ6XBDzSrahlJMtn1FyuZmn8ZPyNbLi5PM44r42FillaGDUYBaOAu4fv8gaZ3qvR3Uu2NqBKF6Ez//ExmxpBnRCn9po1WWwJxtLWOpBscPjmeo2BeKMwhenXX99Sq6f5WCd1++2sgC8Ibsef38kHe5kmClfGcpnW4Psgz7xEeszpmTONA6vQRvYpfkwD7nuJj0VEm/EhtxOIOzdJaQfkIV15zZaljQQOKgcBebXcuhoFbZGQqOKyJpx6nCFfsm8cszzaI+84/NzrcMaB5uk0xsLqeBMD3Sc9HtA1FVt67kNa1+EZwhuips2nV2L/z6PYv2CL+DzlE3RcP0nZFUo0wygG5hqOMjqex1QrdNTXpiUn+z/pXgaEPp4AKmzS4P80yZnFcTdpmnKdGzLvtUagHYlL6wiLDNvhbX2AUUF3h9j+sE1rsfHnKLJC6GQgXVIXZbWOJPxq6pnOqX/86xlFU36U7kZiOF7X0ROBNYBQpiW9gSnRaopx72d9kNdL6OFegPRkdGKZdHZy2y8FHsncQz/Vytbc1JK1BUiu7Rej81isPzLW1RnIzrD9CwdaQBqYoYMxQFv91hELY0iSTBMU6cCeAOJugeRtazch20sSxpp627lYGazoyJZIWZp9cHA4nX/RRG6cGzDJfd/4nlQWgOl4DiG2L2+Ho0MuXGBdlvmmkqnDX6sTfTeg4AcXFfWhLWy+v/QDhPb/qTOrmnsvpIFviGLurbfcnWDhOm16Egt8MBm4KfGcN7ZFFeuuATeTa4aELrEU+2Lfvh7Jha8N1Qgsqxfk6lf5LdlsL+3CZejOqbuUH5caJ2VCxjj9XREtmgraEMcNTaZxSoi7TEuTKxGjriVTZo5I31oKPISq+BPkL77dHzyUbd/ArrMUGQsSSOyL+8+XvAf4IFhxO0DYdw3PK+ZJzAjKvf79wzj1iXsS3Wv56oITfnw8K/ccHEX29LuBSNp9qpIeQO93O65adHk4ND/FKqdb9ENXxWS23NR6CfmAzRZJz8PMm9xPjhSNZwgxzq3ehVTu1mnnjek0KPs07i5zRH07qGJG5qQzhVDH990RoZqE1eFUrU125S1YgllIASclzoSSGxdSWgo1adk/9Xnk/SuBhBSL5Q8/YkMrd+tgj5IrUYhqmd368hJlGG3VNgpf8r3UQwf261JOSS+tF7vTq7yMBVCtZ9AL1UakdyHH1DV9r0tFwmZmcfXyhxdZxrdyPnRj8qISFnQiZWuwHR+oCAQyPtPYdNdFTNyTpDIJOGKBYnzGTsI1hb232rM3xk4cSdR2o8R6CQVMVMZLFoaAc4ZXQ0pIShrUSJB7yGEh7TvCn6s7nWOefQPMmElX2Z/3So0Gh4kNJjoCmu+QkQG0vK2PpEcqnc6D+aPBRiVQaymcRwmtZmBF7bMpww0s4Wy16WEim2OUoUX8589AbbHWC5KuezfBaptHY/je+v6Xte0B9D0aGNo8rY9NPWuQXgQrv5LBjCOMpfdh73Xbp7thiO2dT+YgceaXZMg9uOs0HFR9MKgFje5Zqz+lII9C9P+cn6n6pqT02oMpDgce0is+4mxLcWmEcvVHDMYf5MC5e+9xi7zChFr9mwRYWGugHwRVOeKCBSEIYKPy/msts3FdmWlI1/g3ahXxhz0nL2Go0UI+V2Uk5bF2ZMT3LpgihWUDKfFL+u5aLFNPKUPmOlqX8K0PUn/gu3XrsN2jIaF4qJoS+pOtn5IJzALD1SYKvwCZniZS3HtFZVYEkaXeAsFeqpq9HdkmPfIhobwr6WL1KKp7WHK5b1EAyFdydIxtA+XBC6/iOXSNKLyIVgpuW24O9hdGf+D2C/9nVKOXVXjGhDkBgVHDHemsUGKGo1NFXMqEN1x3XCciYYXaEBRlNqzv71OPgHDmK6mWqJwdgYiDfmwr23UgcBqa9KkbWHn7ojPh8BNzi5TM0d9vKLIMBBuIdFndNXmAsxchTbQWBEXAVaIClSJos9xXMCnlmSXXNZKGkm7bYZMI8nkVVae4hsMw5ghZZc2z0+u6YWsox4pS4Rpw2xbJM77YXdp0TX/0bRr/YAxD5wAj5TqFvdaX1Qt8JSV/NhuWDkGBljYzUIRVkeRuGcU7pxDQEOXaqgDrI3SFndfAhRNATjBm9aNCkj6MZcWu1TlyEl5QAd82jRG0Pqp4elE0Gtz8teSGGAjxt9cDCR/WOspUNh/dJaUGEK83Qo/6wjEO4fFHGn/gw8fea9sYgwyUAVFEx0R0ZKpaECV2LT6+hB5M4L9jGxf6Rqbk/yhSoFYMLJyeUzLpLskm4sxajNOopJ4U0bFUpB0UnfiUjYHBjmyPLaf668U9o03cB4WmVK1oPESaWpkZTu/CWul5UGM1EPKFdbPRP8uNFkZSCS2/6QRE7zRFTFtDdxqZfrOZNc8PbaFB+QFEzuEFNWqLUQ5HajggbokFjInSu7eS4gsWFufOzsnOZ50bbB6J3wtaPIbU+kwuG0o+qErhpXsyCjgpYaP6K7fwO1RiM1d8jpl5bQ8L5GwvL+/gUId9AYN9np1JhYprLHP5Qv9XjgtRQBACgiKExrOfmui0ERLFijVx08I0bHP40wx9svAhZ6l6/dbYXjHU7dHYhlwD9TAln+d6Um6tZJdf638xODXCZ7tvqAyfRWeLEVMH7DJEdQ3v+mPPe+LaMgDiqJDTuoaDsIf8xG1LP3I6M/Xzwaou8mhl3BR+QL13xtGj9d+fbxMz9rN7v7xc7YP0WjYWBwAAAEAJAACiR8fQYANxyd4QYNVJnc/3WC77/gy/gHhhg30eheLfgAY8IBHTGzX2wyC6SpLtJlHbsBzsmLkm8gS0xkWBHICYLCigOjIkCM8sgVThMuHXpV1ddP/HK2M8D5+eB7fvI8FTEOFRfRrgI7f4dkrj2iEN7M6vDDTy8w/Zk/JC+YCoX8O9/OS08Ig4CxYSJVWitvkkztM16vJ2OUct5V65shmYcjaiorGed9UMaeJ1+9en/+PnUsuSnMJs2pC1gmu0Su820HKsb2j3bpErFcpK8zHtF2XCX7Ar72XRK9fV1y78f7wlxOmF/1r+bLvoeahOutr7crvLloBzWWYE++Bizb4ekMfK0373Tu0UM1uKrTjx2Rp9kzQANYkI1LbZJ+vjp9qHM4yl39Qr0FV9J6L8hLketQ35+KVOtAh7wJ//DVO03SqHPJJOf7CljUsjOyD6iv3rf8Nj5lfy2EidsqFo1hajKyOz6FT6BGouqWXr7tieCaV+phcZNiYr/2jE8hDsnFfe9aZokKL4Dtzmc3FtX40YTMKyTon3UD4j4VaF+Bviu8ca4Xak4Q8EGLqq+aF2bq+xBP7s3o4yz4hgixmWS+1Dennr06zth/inxhHeLeO5sPLcJs7fpPK09K2Ux+aHELzG35qMc2nkgepcBhPAUZF3yd1cNJxWTqZiow5wSr5TVy7V4tlsXMcnoa2+vAM6W/8GtvEMsS2s366TDeul9IxePsVmNfNuJo5dgwPhl78OKsbLFKszg9QcGJ03VcpXK2P+H4e/7jKWm0KwjKLLJr/S+5G56a6fF/1x+OelRyCon+V3EmSlAucaxJ+dDbbKDNXdl1DSzW6H817jRj62ZkM10JgU+XthK69Cq60EM+y7Y+Lw5cQZEZTe027C5nUi5q1tVzij5Skuw9SkUS1Gn65W5xilO3jW7I4j+wYgj/TsF71E7hFipKPtFFXUtCzDfCBA1FKpIyeQzofCEe2CXaSO7lctH2R+b8zXVzfMvpfa490WBv3yZJNTzUcEzg7E/xEBSYJ5s4zS6mXj71jVpNevR+aXABaZ3/SFZuYp2Z/F8tLbqtD+TMJNp9lG7XKOMFFntHeOAvE8+EyV5Cx6taYdH+XNvxVmXoaCQFLVd1JNBBK6CH/0gS3nTPzvtO8l3mFcrCV+IBoS20W7b/ocmcmh7CwIEBjeeEvyxMp9ms4pWNdR+KEEwWJ5mi5iRAVrEz06GIRNHJv4IoEIQ0bt4AmaXLCHbe/zuwrfV9AvQyG9a3PQtO5BN5XoV6TZUnqMaTIR+OvTVZJg8aPBjgaBcIXLJDCO35ZA1kxR555ZkIHkyIBYEGqG7IRLPMD8Tun+8HLL7B9zfkxHVHkfgMRLcBgQP8eLY6mx5+awYjpf5WkM07v03DqCNYO7bS6rs4eRztoC6Bx1duWiKbn3Idnxxog/nAY1C0PeNaLLDiC50+J8CbdJt3m8PC8PUoZbH1YvN7XFtxIcwFIv9YUmIl5oFvNJeM/fO3ixjd81Go6n2ae4jzKZLvsBqrJbt8XyeX4LOVqdHMj9x/XU2dv3prfcjjpr3Zm6n0T7RMvos5PuMH4Hlf7mVo0B++UPMArHKkxa1YwQ1zljvWaBGhcU2h/FgkNS7nsT3Vx72Of9RF29VZAaxj/mH1+VHU3DXNOQNMI+1t12tkl9SS3ZQMshHAfQFu7qGM/22oA7siYDJIldaWCDTJQyLi9AUIvgvJC5GTiK/3XB6A+huGKu9StAEhm+fSBVhUVXHlR2g9zYGOmpsS2wkwHQslyndHXRX1+iPVa/+VUCHyaNHAqg544CWf+6DJ5Op0dzZgAlV6bh5vG/U+K/8vHvP+pIIomPbt3ujX8zcKbl0MoFag+Z03fJTt4tLVJK85y2i0kaiXNtyql2dqMmF88B4bgyYf9EjhdDuUjQImzN6EeGolb75ZHrSbFbRzsOjxC7bpfaVrjFL4bssiGIY+WXb7Q+NalEO+5o4aelA3ukfUil3Uo3LnoSaJlU2+TQk0z6R4JpJdkucJNaAgH3kIyvfMaTmB2Bgn+bdPLMx1RxrWWQdBtXOpid48NJX4lU0jUgajK6Q3TmsqQtGsWdkkvPth5hSatDSumcvGkNDGRMNtc+8mckOBfSFoFewWpsZTXfD+W4wvHbsE1LoWkXrAaLdp4xoaiLSYlguIJJ7cFAX18CoCfKCcGxmr0l9MXJ5wRsunvxwqafjxOGKNmVu3QKXYXa9mt1kRWbFmLYZ/EopVz7voKqbmP0A11QRfwu0RQrlawhoJ18puruv536kIWGs2gb7BYate31z9XNu05hTLUXh/JahfjEJ1J1PomZUf64sahu0a5HCIqMibtZD1vn+vM6FsVMLZlXFiLMV6ofp6FPH/yKHqpS/yQufzSMTVTj5WZoeZ/ehUIeBLEX9bQPwqkxJm/pdHbgYsyjZPfcyzOChnIlaTURyyd3OK/+t8FZ13s3MFq5cAnsQyWSH2Ok29gxjuE7XPyMwmP+URihC5d19kIgSK9kTSp3W6hX2hrgexNH/+is8/XzHZdWf5ErRUoCEASslC7NVi9iAUh9+hCZIlQdInpQs3GJCcC2pWuJZc0V+geM6BJU1PUYtkYH9+JPlKDgX/lmZK7jloYznTMAQzIpf5/y8bJWA33YumLPBtvnKej+X+UjqCKxLn0pfuWbtCqgM8Wm89DvtAiCkNAnquG4bjy3608Ub+WAAE+KunLv2DXuqKbXfiC6TVUXcfmlr3E6rkaSZy2lQpJfubw7o2spX9JhLBIXVLI0pQbjxyHyxUT2Nk00QNMdaEsE9Vs9fRhAZ7PMzYd+YrShWQZM8Mt+HkyOp/HSGN5UwECVqwEhzK6PksxwLBYCaD0luXWZZvgDte5Ur4BiRT7Hkh/YhL1kZhwDa5KVFuMcapN5afSfqMtGXctwoYLqq+XhiQ75vxm9o7eQzhM5Hi8DSgp7W/SgmAQrx7UdfwXS3WRpwKAHHFjxn+PAp/1YBbB0zYlFWwSVu3dGT7DIzddU9SZy9s0QOBZoiTEO++Q7mEWYBjFqCVOejo7q/5yK1Do60Jh5B5iCJQEJLBvIRWqoD+RhJ4zlmNETU/3pvEYRMpMBjbDXL6LI4yFebRxeKhPuUoFsQyWffyJHN881p2rZB7H/MlWPCI7zwtLiEcdxRwAAAFgJAAAsK6QgzzLYF9r9g+EwMDRaSZAltghC8yOR3h6QEIb1Y/xMz5i8rhXIbF7yLqLpsvTPb9H3UrcdtZNSf3o4wpp6kKVFMfVJkVKRxiE4qokNpth93pio3HGIVGnJ9+CtLaBopV7RcAmngQZdggBnSo4Gv2VG/LDvRAZQIsRico14CFtNnulNJYuIHggvCqh04WBstFQQetm4a+llpHiLAsHvIMWycuc7/SIvDXdd4EX7/2kaU8uccKbYQo3NBpxSGrhQSfBPdsEaHcZTp/mJmbXcJ/NP7clQPfCWtz5qjJiN6FaI9kxgTAQf2pQ+3VCNgmDqNV5jRF7t+2BN8muQUGR4iByTWnXBbTr2HQ+MBavgwDIj2SwBJnmEHK72x7hZhJaF8bQPWF1vHoZGJ/cEGQBwSNLJ4LrtygzozH0HWjMpb52MUVMWJuNSzCxq76Ju9QRiVrOarcry2uxmE2Hpm7geulomBmZLHFENm+3jFLO2Bw5qfDUe935LPRmhZR9/GtqzKdu4E7rGBLhmZnbi//06mfiCQQIfCtZrCIgCOaSfwl3wykU0/QEjG6oOyTCRwJkUxx3NQIySEj7aInBtVtTVUbrQhIvm/O6z4Bgcf5fCpvVa88S9zm8X6yBB8JT1QUjhZlCY3XSHLIz15vFL+cUIxQA0TMaAF+mDvV+K6C/6+9Gq9cUiPZgzeuFNMP/sIm3k9ndpzYJcixpUpe0ZcWaSY3Sp4ce5hs4FQHJ+xzMedHaNlY557/UZBGMZMMGJbmlTodjc11whmRzfGNjYPZ4ksEygOaZzs/1FmuJE237ERLFCR1DQebOaPFFA/GSW966eIFTRYZwacAJv96BS6Y5oC4lsGka340APfszS6r9ZFV8Rxlaxr2aK5elIpZoY4LiR7ccggr12ZK78CWEBiR7QCS5DAYb5YZKlf8D4Rsy5OGptd605+iQBQg//L2ZQbX8x9EoGtYl3gmSo0A4YKPtqQOKsww7cVHJIWaU9mxFjFUQRmd9fEG79ucXWRpEjpM8tUQHE4aJtTJNKLGNCEYZFqAExg/XbDz0e53xyRBKDWOLdpSxhUecaRIQlWXvanD5df5vsXj4Gu0U2tiJnkKD2KRik5eibsQk/zzC+W2oAqh7gd3/xDjqPDbMkFA99g8psMjVvp9PU0v7uhGH6A9wc/hLqig2J66YsuUehE/i8zG5/1s6Z2K+NFzuRukscguLBPQU4MjfRWArWrovbi79x+q15cf4JCPrM0sKuJ7N9/WCbAXDCoNdvUyisRoKuDoA3CrgO5A9zjEhUkep2NbxPDYMPpL4EWh1da3BgWUXPa0rJtvvQDDmk9eyYUkdideAFqGP+T1f6D9Nj8+Pnf7kjOMzAAmPp4Qt4pNFUU9B0ME0BXG4KHyhX856RnaYfbojlragmogvwHqis36gmpzUQP2rHGuidcQ/HLvCWbZHcnXijvy+30tPOmgForCVdTGMYDrrVlto6Ye9K+MtL132o2zDOmHVw2zRA0QEoJd5kZJq5Pgs43fi80QwWjF9Ba14P1oBHGDrV1nOHXyhrfy2kFql1CVxUuXsTmzO5s1ETnmyVvyTL7t1NdM8/MqsqXuDao3efAiFRMJBinq5v2+AkvbhE1hv6BPsTuAYMi1UlRWTOZ13k1fPhJ5ULJkQPJ1QFv66oK5srKlWN9G8u7iQXX618AN24YhnsOzgxCGUB/87HUDOHTl1b9LW9I+Cv//IPr/tYnxCB+qcgjpRHlXXzpV0VadKiXzlNd9PIwbAYdwQ8cfP3TY+TI/cY8OfVI2kxqXKIfhLc7yIkznCWARPHVcQ2sSmRgnED5Aa82DI2Hw0mtlN9Voe8DkH5T94ELgtS4Vu8lb3GS0rfDpSxIlWr5bJXMYNWlciWTB7jHJ+L+ifA6YWNMAbpgi4OeZFraeS8LjLmuD1+6OKVi4eWeD92BN2tRGfA8Wn21wRSpUwV99rEbQp3DHBBonh60dudhYXEwnZ05gBUrj/GmfjtXx/GBeS293FFiiaR99V8B/5drALVOOGyMWl74c5nRTu29enRYmInVIJjQfbwcaSu9zxANQJ8dKMEcZhm8VrCyjTGH5k5PrEyROAICNj9ML007Njdd5/kQrisQtCK6jbeok2lOwwrZiXgTb767GAGGgV2g/PSGAguoCTvtlfbKX1H5AwhoBSFTiLGjod8t0SUARAma/XGbagKQoQgGKr2oWlh8LkleUX6mXLUzJNeKImKD4LEFeUf5N7Ip0t5dS+93Gv4euBkLeehfnLYhtYbLZKNoYEMMBUNBftNmvrQapjSr54CCkIR/ZOjerBgC+b/MFLBZhAPSuST1E5mE/MUVmDSdfcj/aiS1ShEG6NR6PkWThJxsAImJVNxOffaN9kC3H7zlBCUvA6FaBEtOH12h3vnRt5nTwERB2P3U6u1vwe0Iu93VAJvBUwp/UeVhYbUwukigEWa0pI7rQW6QmMng9LmodxVbvw58i+SmWWVByYT3Jt1cG5OpEJDWctGHD/3CtYCBmFQrLxM/kqmRLtpfZhcVU8GzCCbPi5kn0oFqtT8tTpFN++iWPXCe/d2tu6NbhjMutZ6YgpcQPVmm+kzMwg23SqC38FYRsFO9Re3sq8WDlpSuC26pCxryfP1JglBMFSXxG/l97ShaXOxfcemJiR/tPgGGTDHzd520QGweHx+JwODLO492MBnNd44iGMdG++ofTecrSvUjY2QkdWa7aSqA6CnFAIMwTWKe/ngndoJZr2V3xa1lRXOUuXvEVa5knxyvkP7WoDqiFJi6uSrCZQRvwhdZa6PuCAYD2XxwI2ZNe2IDthxrOYsXRz0K7+5krI9YKvvrYtr9O2fFvYQRI1ZkC/ZPstGWPU4Qkxi0MWGmFtuMdIYC5ZEgp5bLuqlWDWBmQBpbygCYWkMSroiCOXi/0hdz5AKzoJYFyB5LLloPdS2fiEy40/dMmjmIqjEDkw3A2HlH4Ks0zoBWCJJXYwWOBmmc1m0XjvO541+3CrML06TiRg8oJbB4TNFcakZTiRjkMzIScSuNTf6GDwVyyEgpjTexCaMNOMq3X9qT6m2eAfFQLrY/vHJQo6oWou7WaJ3rajfkTOgooq8lOO4VUTWsMJesC0O+zFMcWAa/CjuyjMmJh8YhT9aNn7N1r2zqKkgCt0pYIZmtnsB6Tc3+ybrECsQsXrQyjuoSAAAACgJAADymQ5UNolyHetq7tV8z6CCHJTmmhbVk/KfKCD7N5HOqOwsEiPTO1BafhL6tqGPCYk6RdiqR4dw23mfoXQmbT9UiaJ5r9ee/H4hNiTTnrccqtFKGfyj2SOfs/3Rkh0qjEFovD7rNgfNyH5UrFrZqrhB3J/i4d83MOGIu7Ccdi89Lmt0lnnMUBvAMjWr7ojl9GH5gTxOEnZJ6xRi5mnQWHG+o70rLQf81k1szrGlcS/h8KG+ZbhlbE5r++U0YQcJM697wtBO/3dQe98+IEhtH6RmEYYTYaZ7T1RhdUvjNDsuc/MeFMdT/SXa26aaZWlheIhVUwUJc7fpqPkIziyWkQqtyggwPLIQW35VaABlRayq04ZtFQ82nsetwlATb/bUk+t0elzy84eXKpsF+1wE3Smk6mcbF1OsHmz0tRNOE5qrJ2cmqxTXAMQ2MFyO7ryzPQQm58wwXEQN/zGme57wymbyug/IzO9GTfgjX7MVJiEMikt2JP6Sv3YEiqQkvbLHdK187192ITmeoUM8KLATyE5zm+zI0WJYESdWgEw3Qw93WQ+f7xOKZwnCx/hIu3thH4fbUKE5uVr2mBf/vwmdzLbuJCUi4Vj/DaIkB1Itv2kmqJ33PCEilNkt9VOYdn0FJQ+MWDEqhQkiTgC6/SuqJ7u0SQfcl603zBFDkiQfGBwdwllOP5g4i7YErbF+BsBnwKXpIjlfCsVr8NfE0mTkw3tR67tcOyJG58zKxHjdHzwA4T6bGxObIcGTCHlBglkkL7qghRfz71m34xmsKeTuYtya8md7IsYwXsGpxa0HR5QeF9pJlHy+OG3hpz16dSP66Ao+lubWye9InRnPXmJ5NwIZjepwfbXPgcyi8ut+530rcSr5Z/ySSbHR4TT5ThYB7cmbknwO88HUplr4PimHOYW8VQgd2Q0yLhAsxqgPVSyPmXXOI8w5+Ji/2K4l2EuN78ES0mIfiU2+2QvT5yEO6qO9M6uZm5yV0ro766ly5N53jMvZzfvflohIfvm4jzIc1/AtzG4sxqCaqeNsZkuizQzFXmTPXcYk596YGk7E0lfRHfomaudQkCrvuisYUjkO4ZMX9dIiwiUMKyvh81tbpE+ELzK5ISBos7UWsDpepWi9Hkr8LNGlm0tuL46RQRrNYPKhPqbAqmxjFKABExJoVqajrToIs1BvRuWbU90TJbq+hnvEff9uGZZqcHIwgW0Elq12hfzHuq/30fkdPcwvxvr8mc6NTTRe079VcyodvILWWVVFlYGVFZdhmXTDb//zzDSKKABoG5SPcqm9lLSg0oAZYnNieDjvJDn1zL2aLsdNctNBH3z45Djc4QthaMX61D7VQ1yohPeNa1mx/xFmZW55MefndEAa3nDAU9ODHQ++zHSQmKoFAlQjTpt6zPVK9CJIS+9MkWRXdWsDyhK0FFmHZfEuVMkPSJOQt094qVyJ7PZDTXzu4Xfm3G15FXnNAN17MUAfh30j5oIKMDnAC+3Pw6QoLjzjYOLt3YpJ4lOjQ4wBXrco6RerRW2neh53hoStJnRuroCDroxPHlo+bsxJ268OBUL1AyFQ6jNVc3Ie28s30vHr30neQAM/hFEoNf0pzNogZEhuVG3KJrImfZqZRhv9uGy04YE+EgdbbDWHRxW8dC2cnNHeXWRVu+dNjeQxwWM442AQP0yZy8VxieuTDRbC+n/LQekxg0vTi1uU/h8MTT0lUiB5lfvVl/JzNWFwm0QgqQ4s2wuLVmBDBKAPFi8NSE6h5S+ecwSIlGtugmW3EJ5OsxOqprOsLqkmvUKdCMGz4krqyx/t02b2Pnma/e1Ba8587UsSiS6J7IXUOhEKheETvbbTjNp30/E8BEjMd5Bt0YPWcmCqftPIstDFVkhYzT9uclACMKQVhlwiz6ZJyf4IpWkU9tvrcuStTiLyRTbQKoUvqbLz734Q36I8qo0ZDenAl5jDOCaDufh/rrijbSm9yyrzpJb+WgMKFhy+hRzXYIzNr2AG8RN2ok5THMIl9BmQNJSMY0cHRgZtQ9zzjvZRbe80rZB55Iqb8dRAGLL9qqM2jMp/d65pwN57gX53xFR0EpODYWo9comx9nmYMNRQuWy38xsszobDf3ddhSD06fMCyfbE/PPaQKyvBKJL59OHqidvz5gY2EObhHLB22YRxjX9DDdQ2p4xe0VyDYsmXBwKuh58DdmHGDmJcjtpndIZ3uUPyIm8AIvcXVPzrTLVe4EaPwVHDb92+jy6hPIj2F7JZfQNSS1pWEIXoheRJVpi1W81h75JFCiCCVl2OmbEojFl4XMEDcwsyPm7mZvw1DzRMFMckHXj6l+q9c8Sx/HQ+3sq2mgyD7qDZetG37+QR9mlDI33GNYNh9fbTddOlJsN3+7ECW7vBtvPXBFzAFz2siObbWoP8GYm9ysYYUPEvtHHOiTzODU4EWwSB8vQKxTeiKHNq1hB/jQKsU05Fu18/zkDtLcTNhhivNjrRFJaHUxfMQ0gLHgZqC8z4KhcnLDpIrrl9gWr1AUbPr3kaXHeBzHtT8zt8SDXPfOdIv2C/kpG+pxtk2qDIPBo2Apq7ltp+GfiqslVkGx+mr5GTe6xz5v2w1Eh2R/0CE/XAhHu4iUZJw3Wlpsx98OB7p737gQXdZTG3kBUvSJGI5XdzY65kP9GzRGT3odXVi0Jx8e7AnPVhUr85TdaXtAWmlleh8vCqoUaoRtOU8IgTgEQSSxkwKIijTW3EMt8Pw1LAknceOwaPYwi7cqokiGJ6XlY7aRpuIZXIbFHc5nkqplP5oTYmYoNama/NbNMIov35GIan00sCwWfu4KNSpGKJQi69RNpVgjCAApiF0ajTg4l4NgnH3xqHKYXR7nrqeUsBYyZ90O7UHK9KZGjSwkZR5hN8JwOCl06RKLRJEF4IaqiHtkzGWrRdhDgSSfGQv54psBU1UENn0p5zxFVt3PGyd2cckO56QPD1FOTVokL6Nbt+7kx6VdU0JekQWrxHaegGlSzgR3smYYGg9eYQj7sfFTgPGkxf4xsbVsxXBA3M8c79wEuR0dHEC8UGL8dlBEBdwNxiPk3/pSKpsFS+FXF/hGPUzQCNshIedTYJsp6xN/AIUevxu3YV/4FI0ShGxKFU3PhNEJjSQAAAAgJAAA6EcedTQeoEfDXa6OTdgXWsRiBSjrYfVvfow+3LbOCg08/GO8flrhtVPtrCsBMSddu+pJitn4mFljNdBuchKG0kLvq+/b1vKrwESwmamcpa6oBJPrysA1YSzejbH6MWHzwqtdjJE5S21vcgtcW7+YRPAyqzcdEWyUf6IfXftpoFO8DV9lAPsquuwAHy5xPj3Frv5SBYCKieEtshzVVf9yPBMujFtxKt4bVODpRpkjX7HI75k2g+KbdwyzI0FQMJnWIIyVLEVWWYHyFnH7xjO3CE26Y4DuJDjuDNc2vvP5hy9Mq3Lvrfuj3hgMA4VPh/+L6M5Io3Mgs/XNNf67Ny3uLX1AOiYCXKJoLx/4Ytkq1zDlcRr8gawYe8zX1F271FGxvG1r44tJra0/4FxVrRLf5MabiQvndxEAfa5Njh+KN7dw3b+lYQDlNsg9H8/8/d5uI0fOt0Tz7dSEONJg3IiXAedzGQ//pAYDV0bX7wu25XJ9aAh9qLMqNk+GvmWD4sQH1TNQ2D/vXVo5HeOKAAEk7IquXSNmVaD0uLZsz/T8x2WJnT/ODbPidIaiCurt9SkyNeWmOKcct+7Rs34Z/Juot7ra0MYGwWV30kbDPGj1+bR04SC8tzpxO/OvwzNIOVd7lfgZRl0Vid70yoCnRxK8TkAJiuV78JBkVR8uC6z7FkQk+a6t3fjPRvBdlxJO4MOt3MWQWqYFxj4+PKYQKM/h+s35sCWtL7qUqTMxSBg4J86dQFdJSFjg7rLsTSNk5ekYZSp7k8DEVtOw6/065txn6S88iOtspn12c6ZKMscpD65Sj1YgSALp3lrDeBa+ArEEahY+i9ChVwZ59KClhwgaXsbbNwEgvIIIhOtdtT3m7qp0H+pWEAoBxUBTgVO22/7a/ys43MuautAnY7ndYCAbQ/6esvisBlQoEJlBk8qESfahVVVI3TeJDzN7WbspqrfdlKq1hU/xk8m3TEfaHJVVNxZMxiyP/PY10+6GPkkR7BNoL2GSkef43WlByowtG8VFU5Vn0AbbfDNE2j3OaoghWSzNkRKSpTUviwdoho/K04e5gHxLHxJmlF0QmfGs9vyMd+fEmszOcu3JsoDVU9xCmgnIjpvXejfDt5UDs3poUstBePd9i1Qg/0dtHcru4CuqPiMTO4FBsJ3zhN2bryblYkT2ygMvBGmLmg3LAFkS9ycukZwU2UGY/8yBdSTEDZ3Yz9fIWJHBnfkV5eKn4pAqTkKOdUrj6yevZuHTkMPJoseemwFCAiuh1b7fX5SUEAfWdxTSGuNMrjy3bxV/SipQJ7pJf92+pZ/raPt4irVIdZc81J3lNney/9TQK+U18WlDCNO72LWYQakV/De+jBsiLHD8tt0069qISlAKhl8TxNJ2szOyeb11fv7wA+HZRPFhVUWJ6cpJzJPBLdQThISCYJmBDXYSnA4TfA4L00/T/ZVsZWeSqc7/Ul2x7Ox3wDI3dIinjeHZAfjGGpQh2H8dg8O7RNphduNf5gyOV9Tt9SFThjJ+gyR+waiviwzzxRX1+xpRk+/QeZH2C/pAGCmz8was8YLL00vTD89aCwCU7get/iZG8W4DsqFDQmSA68YGVqLs/DyyXZGBWH31IiE0fptP0ESi/DsoL+un88Bq8AKcrWPUu5tzSAE955dPG1mFfL7kQjjc59mk2nEAbiqZ7MoVMSkRq77eYaxQ1OZve/tHszvdF3PFd89SILAEMbOnu23HSQzgfRXHDOxtMdYgqFPQBXphLU/w4qFXWDv2LaNRoNrSFW9QAklQYNEZrUmk/oPlR2IKudB86svaIrZiMKzEKrCBvXMCkmbUbn2unI6YGeqlzmZoB0YlSW9bTK71pg2uhFUGW73YsBuhJX54FBRW3oDB+kGjyImSbHOaBbpV4ZaMygGg/Bj9SIbSdw3ERCQ1EOPYkApXIAtV9LHlS8Bt6nkWcEWaucKWnUll+OxJhKLAXptHhDZm6N1RzUMAC5e/+Aee5K2gAOhDP1g7eNMVhd9I7SO0jc7Pds/aimZKiL6p+Cj3ni01EFXZ1GkUAK18/5wTDNLlK7tEJbaJ8WorgSweMI8vwELxLs11r/XlNg0IIIJT1Jpqk3cKjlT4jZEQDak0Zv64XI+6UeGcH7ReKhvkPaPveLoylC5w6MziQ1oL2IW9CJuaC7pEId6sh2sFCZ3njuVESn+7dC+H4lxXP9KoYkFncaKZIdFy+sSYkHzOIOMirzTYWAq0W4s4cEisofnA+XxsHUceXSIPPYc3lRn1qwoacr+C4TRP21rIeEXBPJM7NrQLXS52YTKSKFaumJdT8jFwbSS218W6dAAYVIZaDaG/cZMwd61VEH5krhjL4odG1FstWqPOPjnwKlwLe43vm9+yCxD+wQ0OSVWwWDLuTtXloBh/bziM77H7FPaTws1P5BOKsnPZxK0lTDozYTlC3dvnsPuUEhyC1FBq7vcCy18TunDtadyXhpI+LuwFrUpjIg6xVOu3fMH+id4ctxcd9cDXW/iP7gzOwnca8txBPGrnX2qgxwNxk6hb03qnM+u8uzFHLVie5MZkCr259SxmkQxVSoI6jcelEwQ1CNZS0iUwkzSGpJzI2/zxT54E3XPDHa3IoKefIZQNXE0Oua6H4sfpJ9f4gVbhxlD1a2S9/m+u2JJnx+G/jovA/3kDk9D75UXSf6CAJc1Y98pb4jRVKODhbF6eFOzecpjko/DacyKk7i1a7h3ob0+5u/ELzxt/gSHc40Whr7n5hQDgjbq/pzN7aX1vysggGs2CndbzxytaMV0zESH8XRj/FobNgUeZpM1FZQFP8hgvsSTKFEPFq2kUVwSi6eTSN8fmct57Ox/eRIXAEIvGcNX5BRrytBdSPsC8HQ/eEUuY9hGIx6c61PPc4hwQ7Z674xQrompKqKTwG5oQg48FHh9O3GpJZVihP40Od0eSSrEkIe65wRertVHv36TL2Is3CxeU7fOMP5KHPui3cFm12Mad8yAcsw1nGWytb8n2jlbdpWVf29EK9fujoa0K9oEWXcrjGMi7Yu0Ch8/ZfQs/WMJYlizhJ+1zcTa+FdPykMfKk5ogeb3UbuEoAAADQCAAAceCI0Env/2+SMMbJ5B5aKIfDaPhcPf0KLOZ6St9uzr40QXpGD7tu801nF+f6r3aGsaqDYsOKi91aEhUC6WFrgu0PYvdiLOzpCCtazIJvMdLKKwQWz95T+nVwWG2vGsVytONC04WkW507+UypsQyQyMQJdhMpG+ZmHOKeYMHYwoEOY/Aa5+qs0a1KLSnBdLeFp4PMJPFYVuIT1mI9DV45zmmuBdu0PQqdStTYYS2WvR0EyT2uu2BYhdvZ1WEe/UAucDqEWCBJAX5BqZhTGR5fh/ajdw2WyxAjV5V/OSrPPmHiwRhYLHUEVZSP44Ju553QhFxFEB/XdW2vhqG+XJJjzo2XKJmy5VdREanmzCgHnHAsGcMlAWbcABh7znkAkNBE5ZZlRSBEhRy08mvE9qQ/ArxUOXQRpMpVEdGp15DBcKTXQ9MBLiGd/SlgoQ70ky9YGKIn4LEU4v/pZvhWLyriISiiDfJfXHl5mBtQo5e1bSU+p02zgvd986/jCIn+WFQ/EvJtRriiR13+4roR3BYgb7tHN+chViiOj6SDhG+K0/MFWGbKJCzPKYFHSi3xzrbXZuj0qrEdZFmueQMhFNcDkvqxKNl7yXMdr6MPDYw/MASg+qC0OsWYls9bE33QHx2HEa/vq/PGyk12VWgw9ki+V013mn9fY6P8V8VHi5XrKfhaXWY8egPK7dxE4sp6uMQchCn6D5XQSNak2Ubi5VmScv2gli53fMj3Oam4O2gcKqRckF/18+HdPYHfxd9jkwiRt3SKaug2dzu+JtoNKEJYT+5ph5GKH2HbWdaD9M3rWq2T7fPjvI1y3fL5eFfyNCSbcTozPXP2HhIxGh8/8nWhFB1CmskADuARPD7Dg9vNDjJOQo21qF9bFEE+XTYPyeDshhGeO2kRt2Ja2PPIZYmEbleZy0ZSuXW/5Zs1Si6/GuaFRMF+i+snIEPA6BRt9pccnMPngpVvhBT2WsletI7y2z4zrJmnQVlkDNudC1zRKReyLuKnhAdbMHtAkclzXJ/mofZudd6V0h6i+zBGIm4OGvhZzGu1T88n/JhpiZ+3PfyeObDkFSnR2MDsZeEblqVgRZGARQzmB3tLhI5tQcGmQxM5Z97VXClCPMCgeyd8md3RB5isAbJ9VpsNzrsWekT8rjyLTCPSvwun+ekukBtUzLbqqO6pS867qdP8Fn1uiwmObvOaMAOUUTyb/4UejgxH3qL4laUfU/cHoLGRl5ah+SARbgfsJJyNx0wFhyTaq5TyYtDKAmSM7KZYfSd08kzGoSCDU13qVdep3HIElLLog/P9VLbbQo7WptTv/xwdPMYC4t7oVfb/caDUpce9vlHeWVyZNcayV0LNTTmu1s+pM0+iqVWwszDyw2DkXWtnoN6DXwVxwUwJMgvXJXDajaMOTkRBpD65Jr+KBYRZUAxd+26obRZicBtcd47NtIRL5MUJC/zsjkC92nwOF7T5LJHAP5onyYxWxfS3MVQIMXcOdCW/Nel7SJ60No8Y30/4qH29Lw3IjsTvlWaiJaUkql9L3UX2tIWgG6jNsIuvddK9MCwYM+JlCtklKtrdAYMpNWpasm3y6cuCAZleMqRf/QyrkTbYk14e/Y5W1Aphu94oSO/3BhPecViEIt9SV3LL4D5lDDRikwAkUKqZateoqL77sKGxz7wBQpULzjqLTmvpN2eoAjS2rpWmcUmyGKpEDBr9gT3zj0balhBfH2qYMajSFlgF6ctLu+RwqrZIdaFSit9SNCC5Et1j0jkpk+FuylCrdi27NiAxe1IvCo5EYa75QxCxNsq9bmpKZkiEbJOK4RPfv/wQiXXiu8piUwLOLWtYajqnprSpDWrsw1K8cM13Rb5eq+C6JldsA46nEnEiIkt2LB14JBmktY4XKLEz4sn0EU6kEZUWjDSPvR1DMbNLMc3X+e+0kXiXtuShNaU7BtgYeN2HKZCeKMB7IFpeOi8FtqoUo8xhYNXxmw1JAskbn/IRYnQ7SnJt/rdI+vP/sUZ+vdRYmuBkEU41juGm9pG08cKnwlQxE1yB/y73zr3MyVHCTyUgEw75s/VFUVOHExVpEAkkOKvpKcxN+WS37XcCrpppqv8D4AP83SfuxsxyGV3KmKBpLW54xEhs7xMMSVqbioVwh3CmPxBVcGnbu2+950dwilfH+i9+XQWvTCi9Iu8FBSoYlhPKWf1TLLwJeN4q54Z0mFEtK8OockdCIbytvv0zXt7NQn20XGtV3iXKKSkGJVVWnbu6KO5ZPpOVSMFrGTKHI8vvWhDg5LcPTVZz63C2fGaDZPs8UbeVsU/RLDm5rrUK0V3dwjmc5w2rIMGiqgJGEsp/Mxx27EeanpuYlxouEnyggdpZBfJJA3IChYMNo1KmI3cxD5CLc9e1EpsiwwI5hdRWJiPkT8nI3dizn2aDH0SQ5XGG2WYqkeEq1oIIB8dVbhKCHEb9OS+1sMvhwVaXbImHspbn64n65Njg1cD92e73aqLpZKLZ2Y4N/5+GksdxcpRmtpHQHUms2SygJJBgRASPFouptDnP1oQRczLjRJCRh2yyplHmNH7I0Ml9+a463+kQuR15mr8Cddr/KxlWVkPOA0mXQq1+IQvj4dwE/0QS24sbrh7UTgvg7kH/wD7fOh0H76ZnNhS3pUVux7b7nbmCGT17zzZak+ZYVyyXYmW1YZC83iIIBt1rWyw4HRPjPH+azMSbH4u2VoMFQcK0gIrIyU0Wla0UL44VkohaIpxgEYBiltZ/XJHwjUNVAWOiM9My+15Pz458ZurXfErMQiT3twweuodghskoagZbvnBrWoksKMaF89nzBEe8xD83abQ6Q3dt8gWaNLL1RCDMhI4nUIGNk9yCNBNWFkalEuk0qyzbY8gTvLofA0ifHBv+FBhZi1QV2cUK3HbapCtSwcYzK2NGUhfVjxpVJNRkgWKUPnD+juWDnlcwnKoIE6Jw8Uufx3R6DykNsWvk6QRguN+X16jXZ18Ckd0RoNzVBAIgY3i4yB7xfUSzCAAAAGAJAAAIGWqKjtl9rx/4vIIvXzHXH34EUElOfqxVAsiVqXxnhowKXikTEpriLCAbpuLPTzeLCGL7Ajlw3H0k1Ybor8GfCU9LccBw0r3kAqZRAbaHJXAHhv/WAzuzFSzDEyMcsww5i3AYDD1/wdReh/WnInUCUD/vUOS2DXGC9aqjzY+DAhHWnMTDR4OigzXgiX8jo+m04GMsNrUHYkQYVbxkAfOXGD3e9+S0xwgaJt16E/XuoHepbc25uCD+6r/UAI6oCSdEFzZ4ORqECgvYxB17BpQwU4dfo13S1U2QOo2SS+5ZQd1DGXanA+mZpujhHo1P/5TsgXgXfcJ4hHpxJGU+cHO02RG/GiZJQ9D/pUuDLuU6NLk393n+Qva2lx24spgc296Eh3Jt8fkWx+HZIw0LXEhUtAmCvMCFAdlOmy5x5lryjBNz5qPIu7bWvRlPb4LMP+XOFifHphn4qKLecssxoOvLEORg8Canx8mX7eKyQzM88PGmnbhazmZLh7gZRjJi+dCGzA3d0epnf/G1mWHngNvdh+YDLyz2Nrpn4nCbIckfVwNJmSVwty+b6FzvI2Q0J6h7kibl5585qLJHmBJjCnVjyrZzHnvhIYe7t9V6BVBo1/+xXpyQIu/KvicKKZmwiHlwMpJ4+mJGYidXS1hYfJMJ/VAEct3TAW0HOlvXUbIhUQUUtXlnU2CbHHg9mbazSaJP2SFDWXZuDNsJm+88Wjpr1/PfZZvnUuBqREN+FOpwMgxSiZ13Gee9g64FfIxd2we6UpFeQCko6L4Pyd4Pfmu1DEweYVyyNprbRn4eAQkQ0qSK91rxt14TwyhYbjM67wc63/Pxq+GqpBQCiPuBvT3VuFVQEYtWoUq6ox2t7b7ugIo5QzA2NOLJb+uRBu06+AXRStNELCGG650yhWId78jz3On9JJo6CLJE+NsdntQH+pQyAn3J6N+SQvbqvbjPx6IgqyGsfyRxXOzE1U2H/vaVTl0VXaXtSxIW4EiIjLZseJ/E8XEYaWBkLZrvSEOg4gdaA4If82WtcuZoo4LYssnhw/vVUS0uWzGD2rhC3iCDxsFNhtPj/25hd5YXWodoeUP9PdV8WeHJ+22rMMypP11sM5GYpmzbdv0pYtV9Spm5pd4Jq+jOUNbQvZl/tO4z7opXFfDHrwwNj1FXDygS1L/Gy9MsLVgRDK9Tri7u8VCuKyF7/QDHtk7jO+pT4djZJCLF7CXr8FCR6WbR6EQdGkU1f/cnvM/oI/mdYqiWZgDeKMjLoTwDssWurGF/NvjLdVPEP+kxIDWGX6KA1dds0YgTA0LxeockAQeKYXubjTV4P1lzmuw3wO3yelTv5NFdc2rnlmtZJEriJnqrbdg2Bur3rTYCSRhfKuDKrTi6WpR2ecWVhoF6Y0jbokj7cLdcfecI1GTF0bOvOBJomJRlIpfgZWl4AS9OxmUqrSbcAeAJQAdzjUUR2yaFRZeekjkxyWBgmkmUy0YhNHc0KBGQZVerTRgNQ3ndovAEqV8rGx0V41mxYEZtC4ZiCxcjV5CEUDEOyVoCQgRwnuq8OLhicMbNjVhjMjwiuVvHX60zPgLDGzkYzuKWoyT20pwVVlzUW0Ek3enjbGECGQ5Kf7bHTTDrsOAqVn02G65IQXFZ9D5GrsaujZ0sH+UFDLCXrUefPWFZ3Nskk0LyxrneEwoTqzcEcirUOG1KrmpTP9ik7KgIRm98IKRDKHGz0ZDoqfjkvEQHfIROKuGD+k2r4RM4VhOAjmpYNdd5D4M+bPbiKcX4H1BpyCV9ZyVUHHIq6f3t7fQyDjW/b1n5MU8/mVX0NRU2RIs7kashmJL7kuprXg/Fz4080XRL02LLO9D+IKOp3VJQfr6dxifAXyk93fkmjgqg1/hRaYzXLew7pTVOpGO4HYKs15AoDuVsFPeNQwPWuN3Uzm4J37RmVenYmd+fGa2Jg5D8sWo8w0ym0aQx12WuO0boyYTYBQP1qxEVfCG18mwqf1KMIT9gwlQfFB+8p/KmZmcz0/YEBhpG2wPxOcOZjX48oY2nuQNNIfrS0OqQo2k2NURoMfwfGKjGF1hWQQwNP3nrcRwGHxtWXfBUeAiLASVV7AnThQGPMVhYnCY4yzgUbC1bu4UDRqFwTQJIM7QNQ7IYh0AG0lnToeqYP/HiRf4UaXjlPoBTS42yQcQELiuE8b/wZXaSmzHMK9BhIEelfzWaCdB1V86fUhnB29HpDl9K7aIbuL6w0w8nAhWoWfKCxa0xpObn3+RfJj/ulnGuDl348wwQQqV5v0sHgUoEHnHLCl+4k3HAsflX1qRajxAg9aECkJ1b+/Q+9OtQhWFdn8o6HyMbV/N6FZrJNnnGoFPR9CklKTXIMflsEO6dLxOryBzAfo5nKpKS9cnv7YUDl0GNL5ay4eoFStgbitzaVV2c6nFP5nuOFXiLYopDh8OVFiKQV+k0zMhhVNY81277ZgH8J1QTDG05Y/IXP9C7X5K1aKsaGtbp+n31LB6iHTX2bpa7CcyoEq4tsxkTydHIrp8mLa7ILurYeDmAC+m0dbQtrN3WoRu5DDexj2SUkZPTeAgetrDKNQlwRIWhUgETKGeWlupXCL2wAbcvQbOFM1wH4YTW2vHN5djHWLi+w9XAclf123jUXlsirVU4+s3I4hVtz2XLazznmulTK4wgqeEmZGG2t7e5KkEd6VXj3M+i/sYSRx78sd4EE/lc6vqVBvrrJotcJ2Qi1iLv7SLYdfr1Zk5QlstVqrsGuQjvFz2SB8Yu+loSLz6Pfw9pkD/yP2kr432IIJ5lkUilnqtCpKc6+FQehsFaAkvCb2h33qMFQrQ/bAUF24ZxGTlCHfqOYcz0cSKSAGCdLFgWkVTmBcQorC6LlGWEaT3867CM//ikqXhs4sQuE7QR5uWbUwjqYe4Nb9ccAciL/vTPcnvY5QVQDRinHz2z+PAz3CwyTrvxqOmaGj3rmQhH7FmEJVV9TRn8tJXfm+EyZE1SOhfKKJeQAU40/6NAP7XxrY5qkc2Uk0StOhZPuOu1FP/VVz5YlTCZfOHtGqrnY2si7x0bF6C8fBWabckhMvSvly2jZVJif6cOc1EQUJaWVFn/PfX/nny2QyFrK5ToJpI211LB/WWkS1g1ok1re62ycT7q1sRMM13xE8Q98a6FXrAKAaU8HHrxotEgWRH1xW/ko0KKJVmTTwfl3zeCntt3u5pb/w1RAAAAWAkAAPOiE4mQqzXOzT+MEGsyz6ogEu8iJKmAHOW0pEfipkIr9QhDPhKD4PUVWifuIlkAzxOpzY0PoWmuZ88TAsHTxUO6mHZsgS3h1CvH2WJKBHsg2nwfMCIq6sS5zkoax2WiuCBZnAhD1WyfFqdLEBAjguiVihuXfqK9LVGAAQVVFTWsEtWf3k0vxTYuCue+sOkc2WIXkImYrW3esX/TpgEoc8Jey975ZjdFMcxg1yT0SGMAEL8YEMq0O3if77QVb/wujZgtRbCKluGEMriomjkf2L1/wcpP1y/tTFySRcs6DrLIv2nq+mXNEcSLBwuhJuiorhvy7ni7+tgzBMpHSGz1EmAEqI3PCXrlNflVotUISKt9ynpJEU52uA5xFMX88HFjXrOD6YQx4suO2yRmZLUYyFUoNfeStG0V2+eDClyL7hgPCK7+10Zqj4DObI/KjLhtKRA8wUOdv+18NUtY94znxtcOFzzEPJaBGVgwqEbmGCRqFtoYC2T3TNe928sO4aBX12tz7hSJxwou4X9M7g+Kj9GVhmO+L6eew5B04vGLynjby3FZGf1WFRlstmpU+8SoXa0UqxZ4oqwBluJW+m9YoUCBuOEoN1U/Dd1d3V3AOfwYPpPibSlOhrXFbD0mUdvrnlxuB7Oc14VnYLiT5/uGMTi/yLPPYr0VIRTV8HOPGDgJ54XGW2RBUNJ0dUZxxXbOTB6b0/QtcMGMmh+Aiz3w1k6bbEy+VNvddZUdWIfi7a0I/G9AcP1lwT4OKhtizvQkCR8vyuAYSkiOms+f8g2ujxPD2fYUvnAvWaSFf203dEjf8InG5NZHW3dA1iJ5/KUMwN7RRhFJZzEoQLgRzO5ajNKxInu1nAef9avVl/CzsZSh1/M/Dbz3Pzbt8FRXcni+5hP/lI54Nr2SsBZopYP1tKPV9NixJtLs+6kZhuJk7wGu/LnjWx/NHnClPHbKLaUm6XQjrnCAUeju85lG4gn/+9lThnpQsFtQtK80ygGk7lJU4inlkzjMrToAoU8OC2aCJm+0CW3fLqknqFt/tc/pTRtQ4bMm/YawMIHNco89uDoPV/QeYx8ixi7zraoH7Ko5mX2d7zuuBkHVE9kiKrwSGUQMW45CNYtoQWGdoyobm6f1hHmdoiKTdv6X83kLqRdXFUE2FcMqKmPgVyNOFgmcRILc/DWjJ40IBgGY5/iMnahMEZr1LY6ef+766ZdLgetN35AHSBhXumYSjGSgz/k/GB93Q4NDeFIlDwwdm+nrtKQh0eeRkV/wGEeKFbkbNBv/1WIHvy//a5IhFVixzvng4/n9IA87SDvKgPfDOGYUXttqtI0YxxD7I26fpHceYjpTOOT8xq7rRYJA7wqVfYSqdU9ei902OWLluy/O9NCWDwwy8scnkP1qBBqOsArKzK3E9cXPxAeWMEfFFg5IOpCJ42AvgTD82Af3ivgqABt3UAuzfXSTiocPxENvJH4sbLM/nUdEwAzd6A4Nuy+RMDpGm9saPHUJpF27iF1q0wzYHoIjzEm97WeIbdvLA7gxpBt88uwGnIhX2o62hgGVBeBrZSbvndbr9LlTes704x6xD2ei3tuTJCkWidHMH0RFdf88/eWUU3p/saEXrNz0vK+tAnnUDh+bHHJNX3WFVkwdsTZD8ZAwYf+6AWSbblinAvgUkVm1HwxaqFbUbystaA2jXJ/WEXksqt0LTaQWWC7a9c7pTMFSd4uGC88IV3y8ir1l4zXdFAPbUuA6BTMNgqF+k1HgjLBeCFAjiTiFafMXKig50Z1wc7UQk7b0i6nPHb9mpYVKTgfgtFKgBVUjsri/dZJzc3eiyTEEirheqs/Hi1C6fZNeTkqGHhUaYxkJK4U5VPZjbRckzas0q95KIo5bTi/8Cf6dh/J9JL4ktznzEHHOdI5+UY/2qdba7ofHNqoipsgpaxqlgkG6PVzgc9A2dwSsCijbxqSxCrv/dquvQc53WpofKD8EKMHA37O+tzuDgegYdaZhdYIcz5SWFtEAXQNtlfDHOdjzwI1op8ck3kq3aY/aECbOdFEtyyOHVlMT3q9wFZqYU2nzy1DE/9U1UTktuGF6Q16S85brHGh4W5FwSFR0LWM2CurO2l4VxmZsCbmVMbd6TF3tuav63YLfQrtyC+6jpgsQRQh9TTmJKXwL6k9Ketnq3Y8MlQcT0rGjBFsPzm5yjUMzU8pjaWvzYOLdE5k+senk0ywaxt5ubf626YustvnZwG3x62DO9b5zjk/HlKb9LvfQQieV+VLAELCDdopBbpy/9B3ibNXYN97LH5Py4k2LjTVgbwxnmK2ippH10gJS6qow/kB8Fmh1k7A6H4kDvwnlP+N7upnasR/1RzJRUHdPozI3IUIOK0YxLmabYuIOw5BnMaWszs0W9ThTmDOhonfYSMcrR8RTXEUvVkxaZg/45bBBr3lnX4An/0U//ivIAQHNIrqsX6fK74yMKchfXlHUI8SoGmHEv6w2vxatSfM28ftrsLXiwQ9aHDzThmw+kES2d1tgqI/HilaVKUA8Rz7v7HhDEaxScSOh2yQWOxG/0FsMcNkhfbuZBLmCBPhdelq5gUTFDkBgZIbEJlAi2NK44B1pWi3+m1ZSbuUekP44WxrP42Zji4WPKYNyDJUsspNOioIfBTfi8DyFDf5M981MjjHGdIAF+dcICC71VnhiyLIUwqQIoZH9uoeHYKeA5b9/wXrKLIteCL85L1qcNFa7jjuvvN+PRxTr43F6h8QH71ZLibJgMDcSl6qsTOuUzeCr1eQqPoYCersiIYxSZxLwMTgvJbzFrKzBguthDZdkOsgcLuktH5dJmg+McJnbPLgzMr0rzNFWsZLSuZxPJc+marM1zJnMJDX4gaJ8LiFUpnChSuW0Upjw8L7mIERnoUtM6CZuaa96JW6AirFXD2tL865MECZTHwmY9Co2Upis6hXjr0UQ4l0/oEcjjRpyQsp/mZPmQkhsg3ivjYjik5Zt6/9C+pmeG4mNZlPQ9Ln5Mazjl+i9BgJNiq6X0nAr7Is0PPtRIbr2WdIUI0Hkp69n3om3rMonFVx1QzFR59BdJycglnB/JIK1/3IkjuLfwnLPooV+HPHIksAXllB4Mp9gRSyt4s1VU1YLcMov75sTsNzP68ryIJTk50VFl7ISDFdRN86m0C9mtYgXq6b2mHty0BraljbBUTuZ0cY9l0RfFh4AAAAA');
