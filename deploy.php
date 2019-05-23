<?php
   $commands = array(
           'git reset –hard HEAD',
           'git pull',
           'git submodule sync',
           'git submodule update',
   );
   foreach($commands as $command){
           $tmp = shell_exec($command);
   }