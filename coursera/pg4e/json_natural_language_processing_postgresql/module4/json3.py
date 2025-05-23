import json

data = []

# works with lists as well. As we see, best practice is to use an object
# for the outer-most structure -> 'entry = {}'
entry = {}
entry['id'] = '001'
entry['x'] = '2'
entry['name'] = 'Chuck'
data.append(entry)

entry = {}
entry['id'] = '009'
entry['x'] = '7'
entry['name'] = 'Brent'
data.append(entry)

print(json.dumps(data, indent=4))
