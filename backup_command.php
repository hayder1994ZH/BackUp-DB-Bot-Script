<?php
shell_exec('sudo rm -f /var/www/BackUps/NounDb_'. date('Y-m-d',strtotime("-1 days")) .'_db.sql');
shell_exec('sudo -i -u postgres pg_dump nounTest > /var/www/BackUps/NounDb_'. date('Y-m-d') .'_db.sql');
