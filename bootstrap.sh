#! /usr/bin/env bash
 
echo -e "\n--- Updating packages list ---\n"
apt-get update

echo -e "\n--- Installing phpmyadmin ---\n"
apt-get -y install phpmyadmin > /dev/null 2>&1

echo -e "\n--- Configure Apache to use phpmyadmin ---\n"
ln -s /etc/phpmyadmin/apache.conf /etc/apache2/conf-available/phpmyadmin.conf

echo -e "\n--- Enabling php config --\n"
a2enconf phpmyadmin > /dev/null 2>&1

echo -e "\n--- Reloading ---\n"
service apache2 reload
