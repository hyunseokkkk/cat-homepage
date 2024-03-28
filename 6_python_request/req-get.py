import requests

print('Hello, World!')

# 주소 바꿈
url = 'http://localhost:8000/index.php'

response = requests.get(url)

# 응답에 내용 포함
print(response.text)