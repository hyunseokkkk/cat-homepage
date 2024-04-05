import requests

print('Hello, World!')


url = 'http://localhost:80/cat-homepage/6_python_request/index.php'

response = requests.get(url)

# 응답에 내용 포함
print(response.text)