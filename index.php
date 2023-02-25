<?php
$path = __DIR__."/src/schema";

if ($handle = opendir($path)) {
    while (false !== ($item = readdir($handle))) {
        if ($item != "." && $item != "..") {
            if(is_file("$path/$item")){
                $str = file_get_contents("$path/$item");
                $str = str_replace("<?php\n","<?php\nnamespace  shiguangxiaotou\\alipay\\schema;\n",$str);
                echo "$path/$item";
                file_put_contents("$path/$item",$str);
//                die();
            }
        }
    }
}