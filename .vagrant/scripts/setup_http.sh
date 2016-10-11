#!/bin/bash

rm -f /etc/httpd/conf.d/vagrant-http.conf && cat > /etc/httpd/conf.d/vagrant-http.conf <<EOF
<VirtualHost *:80>
      SetEnv VAGRANT_ENV true

      ServerAdmin vagrant@production.adwatch.ru
      DocumentRoot "$APP_PATH/public"

      DirectoryIndex index.php index.html app.php

      ErrorLog "$APP_PATH/logs/apache-http-error.log"
      CustomLog "$APP_PATH/logs/apache-http-access.log" combined

      php_admin_value upload_tmp_dir "$APP_PATH/public"
      php_value upload_max_filesize 8000000
      php_value post_max_size 8000000
      php_value session.save_path "/dev/shm"
      php_value date.timezone "Europe/Moscow"

      <Directory "$APP_PATH/public">
          AllowOverride All
          Order allow,deny
          Allow from all
      </Directory>
  </VirtualHost>
EOF