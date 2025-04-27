# hacking-demo
Provisioning of a debian 12 machine with a lamp stack and a Facebook hacking demo on top.

## Facebook MITM hacking demo

This VM serves a fake Facebook login website and stores "hacked" credentials into a database.

## Based on loch-tech/debian-12-bookworm-ch

- debian 12 bookworm
- no desktop
- Swiss German edition (time-zone, language and keyboard layout)

## Options within Vagrantfile

- `config.vm.box`: choose three other vagrant boxes
- `vb.gui`: start the virtual machine with a window while provisioning
- `vb.memory`: set desired memory size of the virtual machine (default is 2048 MB)

## Download already provisioned vagrant box

- if the provisioning with virtualbox should not work, there is an already provisioned version on Hashicorp cloud platform
- in the Vagrantfile comment `config.vm.box = "loch-tech/debian-12-bookworm-ch"` out
- in the Vagrantfile uncomment `config.vm.box = "loch-tech/hacking-demo"`
- in the Vagrantfile comment all `config.vm.provision` options out
- vagrant up

## Connect from host to guest

- to get the ip address of the guest machine run on the guest machine the following command: `ip addr show` (see screenshots --> virtualmachine_01)
- open the browser on the host machine

## Facebook Website

- enter in the brower on the host machine: http://`<insert guest ip address>`/ (for example: http://192.168.56.10/)

## phpMyAdmin (Database GUI Access)

- enter in the brower on the host machine: http://`<insert guest ip address>`/phpyadmin (for example: http://192.168.56.10/phpmyadmin)

## Windows remarks

- if the host is a windows machine, make sure that you installed virtualbox with admin rights (run the installation exe as administrator; is required for setting up network adapters), otherwise private networks / host-only adapters won't work, aka this provisioning
