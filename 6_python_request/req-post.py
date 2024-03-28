import requests

url = 'http://localhost:8000/index.php'
payload = {'username': 'grape', 'password': 'secret1234'}

response = requests.post(url, data = payload)

print(response.text)