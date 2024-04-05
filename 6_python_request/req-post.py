import requests

url = 'http://localhost:80/cat-homepage/6_python_request/index.php'
payload = {'username': 'grape', 'password': 'secret1234'}

response = requests.post(url, data = payload)

print(response.text)