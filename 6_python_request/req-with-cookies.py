import requests

url = 'http://localhost:80/cat-homepage/6_python_request/page-babo.php'

cookies = {
    'user':'babo_dg'
}

response = requests.get(url, cookies=cookies,allow_redirects=False)

print(response.text)