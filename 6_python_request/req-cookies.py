import requests

session = requests.Session()

response = session.post('http://localhost:80/cat-homepage/6_python_request/index.php', data={'username': 'babo', 'password': 'babo1234'}, allow_redirects=True)

for cookie in session.cookies:
    print(f"{cookie.name}: {cookie.value}")

print(response.headers)
print(response.status_code)