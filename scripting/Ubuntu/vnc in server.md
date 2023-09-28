shift+insert paste
left click copy

Setup ubuntu mate eviroment
sudo apt-get update && sudo apt-get dist-upgrade -y
sudo apt-get install --no-install-recommends ubuntu-mate-core ubuntu-mate-desktop -y
sudo apt-get install mate-core mate-desktop-environment mate-notification-daemon xrdp -y

Add user your_user or whatever
adduser your_user
usermod -aG admin your_user
usermod -aG sudo your_user
su - your_user
echo mate-session> ~/.xsession
sudo cp /home/your_user/.xsession /etc/skel
sudo service xrdp restart

This worked login to user via ssh and do this:
start the display service
sudo service slim start
This stops on restart or session leave sometims
how to stop slim
sudo service slim stop

vnc server instalation
vncserver operation
To stop it:
tigervncserver -kill :*
to search for it
netstat -a

to start it:
tigervncserver -localhost no
does not work:
vncserver start
vncserver stop

port is 5900-5905 etc


sudo apt-get install zip gzip tar


optional
create an uservnc
sudo useradd -c "User uservnc for vnc usage" uservnc
sudo passwd uservnc
Then put the password




















