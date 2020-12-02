
# BULLS AND COWS
import random

class Error(Exception):
    # Base class for other exceptions
    pass

class Four_Digit_Error(Error):
    # Raised when number is less or more than 4 digits
    pass

class Number_Have_Alpha_Error(Error):
    # Raised when the number have letters in it
    pass

class Digit_All_Different_Error(Error):
    # Raised when the digits duplicate
    pass

class First_Digit_Zero_Error(Error):
    # Raised when the first digit is zero
    pass

def cls():
    # Clears the console
    print("\n" * 100)

def check_number(word):

    while True:

        try:
            number_i = input(f"Enter a {word} number: ")

            if not number_i.isnumeric():
                raise Number_Have_Alpha_Error

            number = [int(el) for el in number_i]

            if len(number) != 4:
                raise Four_Digit_Error

            elif len(list(set(number))) != len(number):
                raise Digit_All_Different_Error

            elif number[0] == 0:
                raise First_Digit_Zero_Error

            break

        except Number_Have_Alpha_Error:
            print("Number must contain only digits!")
            print()

        except Four_Digit_Error:
            print("You must write a 4-digit number!")
            print()

        except Digit_All_Different_Error:
            print("The digits must be all different!")
            print()

        except First_Digit_Zero_Error:
            print("The number cannot start with Zero!")
            print()

    return number




ans = True
p_v_p = False
p_v_c = False

# MENU
while ans:
    print("----------------------------------")
    print("|   Wellcome to BULLS and COWS   |")
    print("----------------------------------")
    print("""
    1.Player vs Computer
    2.Player vs Player
    3.How to play?
    4.Exit/Quit
    """)
    ans = input("What would you like to do? ")
    print("_______________________________________________________")
    if ans == "1":
        print("\n Number Generated, Guess it!")
        p_v_c = True
        ans = False
    elif ans == "2":
        print("\n Game Started! Enter number and press Enter!")
        p_v_p = True
        ans = False
    elif ans == "3":
        print("""
        The numerical version of the game is usually played with 4 digits.
            In Player VS Computer mode. The computer generates random number,
        then in turn the player try to guess the computer's number who gives
        the number of matches. If the matching digits are in their right 
        positions, they are "bulls", if in different positions, they are "cows"
        
            For example:
        Secret number: 4271
        Player's try:  1234
        Answer: 1 bull and 2 cows. (The bull is "2", the cows are "4" and "1".)
        """)
    elif ans == "4":
        print("\n Goodbye")
        exit()
    elif ans != "":
        print("\n Not Valid Choice Try again")

secret_number = []
data = []
cnt = 0

# RANDOMLY SELECTS NUMBER TO GUESS // PC VS PLAYER
if p_v_c:

    rand = random.choice('123456789')
    rand_1 = random.choice('0123456789')
    rand_2 = random.choice('0123456789')
    rand_3 = random.choice('0123456789')

    secret_number = rand + rand_1 + rand_2 + rand_3
    secret_number = [int(el) for el in secret_number]

# SELECT SECRET NUMBER
elif p_v_p:

    secret_number = check_number("Secret")
    cls()

    data = check_number("Guess")

while not ans:

    result = []

    for i in range(0, len(data)):

        if data[i] == secret_number[i]:
            result.append("Bull")

        elif data[i] in secret_number:
            result.append("Cow")

        elif data[i] not in secret_number:
            pass

        if result == ["Bull", "Bull", "Bull", "Bull"]:
            print()
            print(f"You Guessed!\n- It took you {cnt} tries.")
            print("Thank you for playing :) !")
            ans = True
            p_v_p = False
            p_v_c = False
            cnt = 0
            exit()

    random.shuffle(result)

    if result == [] and cnt > 0:
        print(None)
    else:
        print(' '.join(result))

    cnt += 1

    data = check_number("Guess")
