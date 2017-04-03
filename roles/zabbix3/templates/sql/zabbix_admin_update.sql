update users set passwd=MD5('{{zabbix_mysql_password}}') where userid=1;
