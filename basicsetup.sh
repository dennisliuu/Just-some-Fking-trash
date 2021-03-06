#!/bin/sh
sudo apt remove --purge pantheon-camera -y
sudo apt remove --purge pantheon-mail -y
sudo apt remove --purge pantheon-print -y
sudo apt install git -y
sudo apt-get install g++ build-essential -y
sudo apt-get install software-properties-common -y
sudo add-apt-repository ppa:philip.scott/elementary-tweaks -y && sudo apt-get update -y
sudo apt-get install elementary-tweaks -y
sudo apt-get remove ibus -y
sudo apt-get remove scim -y
sudo apt-get autoremove --purge -y  
sudo apt-get -f install -y  
sudo add-apt-repository ppa:fcitx-team/nightly -y
sudo apt-get update 
sudo apt-get install im-config fcitx fcitx-chewing -y  
sudo im-config -s fcitx -z default
sudo apt install bleachbit -y
wget https://dl.google.com/linux/direct/google-chrome-stable_current_amd64.deb
dpkg -i *.deb -y
apt-get -f install
sudo apt remove --purge vi -y
sudo apt-get install vim -y
print "Done\n"
#etc.
