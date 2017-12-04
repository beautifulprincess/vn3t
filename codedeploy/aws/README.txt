sudo apt-get update
- Ubuntu 14.04
	sudo apt-get install ruby2.0
- Ubuntu 16.04
	sudo apt-get install ruby
sudo apt-get install wget
sudo apt-get install gdebi
cd /home/ubuntu
wget https://aws-codedeploy-ca-central-1.s3.amazonaws.com/latest/install
chmod +x ./install
sudo ./install deb
sudo service codedeploy-agent status
- sudo service codedeploy-agent start
- sudo service codedeploy-agent status