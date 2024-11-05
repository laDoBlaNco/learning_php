import xml.etree.ElementTree as ET
# there is a library for xml as well. 
data = '''
<person>
  <name>Chuck</name>
  <phone type="intl">
    +1 734 303 4456
  </phone>
  <email hide="yes" />
</person>'''

tree = ET.fromstring(data)
# we then have to query the tree rather than just getting back a native structure
print('Name:', tree.find('name').text)
print('Attr:', tree.find('email').get('hide'))
