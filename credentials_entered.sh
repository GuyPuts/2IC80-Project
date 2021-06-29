# Created by Maiko Bergman and Guy Puts

# This script is called when the user has entered their credentials. It captures the video feed and sends it to the user
# Remove spoofed IP from network adapter; system will not respond to any calls for 192.168.1.108 anymore
sudo ip addr del 192.168.1.108 dev enp0s31f6

# Run feed capturing Python function
echo $(sudo python3 videocap.py $1 $2)

# Add spoofed IP to network adapter again; system will be able to respond to calls for 192.168.1.108
sudo ip addr add 192.168.1.108 dev enp0s31f6
