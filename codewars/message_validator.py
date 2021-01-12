import re

def is_a_valid_message(message):
    is_valid = True
    vals = {}
    result = re.findall("[1-9]{1,}[A-Za-z]{1,}", message)
    for el in result:
        num = "".join(x for x in el if x.isdigit())
        text = "".join(s for s in el if s.isalpha())
        vals[num] = text
    for k,v in vals.items():
        num = int(k)
        lenght = len(vals[k])
        if num == lenght:
            is_valid = True
        else:
            is_valid = False
            break
    return is_valid

print(is_a_valid_message("3hey5hello2hi"))
