#### Created by Maiko Bergman and Guy Puts #####

#### HOW TO RUN ###

#### The ATTACKER machine must be running some version of Linux (preferably an Ubuntu-based distribution such as Mint); the VICTIM machine may run any OS. ####

(0. Go to 192.168.1.108 on the VICTIM machine, you will see the real camera login page.<br>
	Current username: admin<br>
	Current password: Hackerman<br>
	Install the plugin that is asked for; this is part of regular camera functioning. The plugin is called NACL and can be found after installation by typing in 'NACL' in the start menu.)<br>

1. Install XAMPP on the ATTACKER machine. This is an Apache server.<br>
	Download link: https://www.apachefriends.org/download.html<br>
	Go through the installer.<br>

2. Install Python (3.8.5) and download the packages Scapy and OpenCV.

3. Navigate to /opt/lampp/htdocs/dashboard<br>
	Select all files in the folder this README is in, and copy them to the dashboard directory.<br>
	
4. Run initial_MITM_script.sh using the command `./initial_MITM_script.sh <em> macAttacker ipAttacker macVictim ipVictim interface </em>`<br>
	The file can either be run with parameters for macAttacker, ipAttacker, macVictim, ipVictim, and interface, or hard-coded.<br>
	The file is run with parameters by default (meaning they are required), but can be run hard-coded by commenting line 6 and uncommenting line 7 of the script.<br>
	The used network adapter/interface is the default Linux network adapter, enp0s31f6.<br>
	If you want to use a different network adapter, then replace enp0s31f6 by the desired adapter in initial_MITM_script.sh and credentials_entered.sh.

5. Go to 192.168.1.108 (default camera address) on the VICTIM machine. You will now see the spoofed login page.<br>
	Enter an arbitrary username and password; you will see a prompt that it is incorrect.<br>
	Enter the correct username and password (username: admin; password: Hackerman).<br>
	You will be redirected to the fake video page, where you will see that the feed is fake.

6. Go back to the ATTACKER machine. Look at the file credentials.txt; this file will now contain the entered username and password.
