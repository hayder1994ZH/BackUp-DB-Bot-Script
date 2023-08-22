<?php
shell_exec('sudo rm -rf /var/www/html/HIS_DB_'. date('Y-m-d',strtotime("-1 days")) .'_db.sql');
shell_exec('mysqldump --defaults-extra-file=/etc/mysql/myPass.cnf -u root his_system > /var/www/html/HIS_DB_'. date('Y-m-d') .'_db.sql');
