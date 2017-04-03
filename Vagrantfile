# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.

Vagrant.configure(2) do |config|


  ANSIBLE_RAW_SSH_ARGS = []
  VAGRANT_VM_PROVIDER = "virtualbox"
  machine_box = "CentOS-7.1.1503-x86_64-netboot"
  #machine_box = "https://github.com/2creatives/vagrant-centos/releases/download/v6.5.3/centos65-x86_64-20140116.box"

  config.vm.define "i1" do |machine|
    machine.vm.box = machine_box
    # machine.vm.hostname = "smartnode1"
    machine.vm.network "private_network", ip: "192.168.23.11"
    machine.vm.provider "virtualbox" do |node|
        node.name = "i1"
        node.memory = 2048
        node.cpus = 2
    end
   end

   config.vm.define "i2" do |machine|
     machine.vm.box = machine_box
    #  machine.vm.hostname = "smartnode2"
     machine.vm.network "private_network", ip: "192.168.23.12"
     machine.vm.provider "virtualbox" do |node|
         node.name = "i2"
         node.memory = 2048
         node.cpus = 2
     end
    end

    config.vm.define "i3" do |machine|
      machine.vm.box = machine_box
      # machine.vm.hostname = "smartnode5"
      machine.vm.network "private_network", ip: "192.168.23.13"
      machine.vm.provider "virtualbox" do |node|
          node.name = "i3"
          node.memory = 2048
          node.cpus = 2
      end
     end

     config.vm.define "i4" do |machine|
       machine.vm.box = machine_box
       # machine.vm.hostname = "smartnode5"
       machine.vm.network "private_network", ip: "192.168.23.14"
       machine.vm.provider "virtualbox" do |node|
           node.name = "i4"
           node.memory = 2048
           node.cpus = 2
       end
      end



end
