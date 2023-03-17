#!/usr/bin/env php
<?php


$path = dirname( __DIR__)."/src";

function publish($path,$namespace="" ){
    if ($handle = opendir($path)) {
        while (false !== ($item = readdir($handle))) {
            if ($item != "." && $item != "..") {
                if(file_exists("$path/$item")){
                    $str = file_get_contents("$path/$item");
                    $str = str_replace("<?php\n","<?php\n"."namespace ".$namespace.";\n",$str);
                    file_put_contents("$path/$item",$str);

                }
            }
        }
    }
}

publish($path."/request",$namespace="shiguangxiaotou\\alipay\\request" );
publish($path."/schema",$namespace="shiguangxiaotou\\alipay\\schema" );