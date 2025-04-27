#!/bin/bash
# https://docs.vagrantup.com/v2/provisioning/shell.html

#########
    #
    #  Hacking-Demo
    #
    #  shell script for provisioning of a debian 12 machine with a hacking demo.
    #
    #  @package     Debian-12-Bookworm-CH
    #  @subpackage  Hacking-Demo
    #  @author      Christian Locher <locher@faithpro.ch>
    #  @copyright   2025 Faithful programming
    #  @license     http://www.gnu.org/licenses/gpl-3.0.en.html GNU/GPLv3
    #  @version     alpha - 2025-05-27
    #  @since       File available since release alpha
    #
    #########


function setUpHackingDemo {
    # setup database
    sudo mysql -u vagrant -pvagrant -e "CREATE DATABASE cyberdemo;"
    sudo mysql -u root -p -e "CREATE USER 'letshack'@'localhost' IDENTIFIED BY 'LetsH4ck!';"
    sudo mysql -u root -p -e "GRANT ALL PRIVILEGES ON cyberdemo.* TO 'letshack'@'localhost';"
    sudo mysql -u root -p -e "GRANT ALL PRIVILEGES ON cyberdemo.* TO 'vagrant'@'localhost';"
    sudo mysql -u root -p -e "FLUSH PRIVILEGES;"
    sudo mysql -u vagrant -pvagrant cyberdemo -e "CREATE TABLE logindata(id int auto_increment, time timestamp default current_timestamp, email varchar(255) not null, password varchar(255), primary key(id));"

    sudo rm /var/www/html/index.php
    sudo cp -a /vagrant/configs/hacking-demo/. /var/www/html/
}

echo "######################"
echo "# setup hacking demo #"
echo "######################"
setUpHackingDemo