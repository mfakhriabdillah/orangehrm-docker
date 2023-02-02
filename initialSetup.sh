#!/bin/sh
echo "Select OrangeHRM Version:"
read ohrmversion

echo "Downloading OrangeHRM v$ohrmversion"

wget https://onboardcloud.dl.sourceforge.net/project/orangehrm/stable/$ohrmversion/orangehrm-$ohrmversion.zip

sudo apt-get install unzip -y
unzip orangehrm-$ohrmversion.zip
mv orangehrm-$ohrmversion orangehrm
