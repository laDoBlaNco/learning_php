
# https://www.pg4e.com/code/hashmath.py

x = 15
y = ord('H')
print('x', x, format(x, '08b'))  
print('y', y, format(y, '08b'))
print('x^y ', format(x^y, '08b'))  # xor only 1 and 0 is true, 0 0 or 1 1 is false
print('x&y ', format(x&y, '08b'))  # and only 1 and 1 is true, everything else false
print('x<<1', format(x<<1, '08b')) # bit shift moves everything over by adding bits (0)
# to the right side. >> this would be shifting to the right or adding 0s to left side
print('x>>1', format(x>>1,'08b')) 
