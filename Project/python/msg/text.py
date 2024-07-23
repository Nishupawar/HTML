import requests
resp = requests.post('https://textbelt.com/text', {
  'phone': '9673969955',
  'message': 'Hello world',
  'key': 'textbelt',
})
print(resp.json())