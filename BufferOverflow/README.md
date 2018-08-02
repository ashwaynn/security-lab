## Buffer Overflow

Get to know about buffer overflow in this [blog post]().

### Demo
Compile and run the source file
```
gcc BufferOverflowAttack.c
```

*Modern compilers restrict buffer overflow attack. Google on how to compile without protection for your compiler and architecture.*

when prompted for password enter `mypass`.
Output will be 
```
Correct Password. Access Granted
```
Try entering a different password
Output will be 
```
Wrong Password. Access Denied
```

### Attack
Now enter a long string with more than 30 chars for the password.
Output will be 
```
Correct Password. Access Granted
```
