<?php
// Zabbix GUI configuration file
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = '{{mysql_connect_ip}}';
$DB['PORT']     = '{{zabbix_mysql_port}}';
$DB['DATABASE'] = '{{zabbix_mysql_dbname}}';
$DB['USER']     = '{{zabbix_mysql_username}}';
$DB['PASSWORD'] = '{{zabbix_mysql_password}}';

// SCHEMA is relevant only for IBM_DB2 database
$DB['SCHEMA'] = '';

$ZBX_SERVER      = '{{zabbixserver}}';
$ZBX_SERVER_PORT = '{{zabbix_server_listenPort}}';
$ZBX_SERVER_NAME = '{{zabbixserver}}';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
?>
