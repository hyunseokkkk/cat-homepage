import requests

# redirect 되어도 쿠키를 유지하고 싶다면 Session 객체를 사용한다.
session = requests.Session()

response = session.post('http://localhost:8000/index.php', data={'username': 'babo', 'password': 'babo1234'}, allow_redirects=True)

for cookie in session.cookies:
    print(f"{cookie.name}: {cookie.value}")

print(response.headers)
print(response.status_code)