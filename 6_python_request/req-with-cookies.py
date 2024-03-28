import requests

url = 'http://localhost:8000/page-babo.php'

cookies = {
    'user':'babo_dg'
}

response = requests.get(url, cookies=cookies,allow_redirects=False)

print(response.text)