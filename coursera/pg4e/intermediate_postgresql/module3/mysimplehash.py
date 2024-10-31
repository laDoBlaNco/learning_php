while True:
    txt = input("Enter a string: ")
    if len(txt) < 1:break

    hv = 0
    pos = 0
    for let in txt:
        pos = (pos % 3) + 1
        hv = (hv + (pos * ord(let))) % 1000000
        print(let,pos,ord(let),hv)

    print(hv,txt)

# the solution here lies in the fact that the pos continues to repeat itself
# 1 2 3 1 2 3 1 2 3, so if you break the letters in groups of three you can 
# easily find the patterns that if reversed in order will give us the same 
# result with different input.