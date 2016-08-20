<?php
$email='aaaa@qq.com';
try{
    if($email!='admin@qq.com'){
    throw new Exception('邮箱错误'); 
    }
}  catch (Exception $e){
    echo $e->getLine();//错误行
    echo $e->getfile();//错误文件
    echo $e->getMessage();//错误信息
}
//xplxslezwmqybigf