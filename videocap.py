# Created by Maiko Bergman and Guy Puts

import cv2
import os
import sys

user = sys.argv[1]
passw = sys.argv[2]
# Get capture link
cap = cv2.VideoCapture("rtsp://"+user+":"+passw+"@192.168.1.108:554/cam/realmonitor?channel=1&subtype=0")
if(not cap.isOpened()):
    print('Error: password incorrect.')
def play_video(folder):
    # load video capture from file
    video = cap
    # window name and size
    cv2.namedWindow("video", cv2.WINDOW_AUTOSIZE)
    while video.isOpened():
        # Read video capture
        ret, frame = video.read()
        # Display each frame
        cv2.imshow("video", frame)
        cv2.imwrite('videocap.jpg', frame)
        print('Success')        
        break
    # Release capture object
    video.release()
    # Exit and distroy all windows
    cv2.destroyAllWindows()

play_video("bb-eye-s001")
