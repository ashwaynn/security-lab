#include <stdio.h>
#include <string.h>
#include <stdlib.h>

int main(void) {
    char buff[15];
    int pass = 0;

    printf("\n Enter the password : \n");
    gets(buff);

    if(strcmp(buff, "mypass") == 0) {
        pass = 1;
    }

    if(pass) {
        printf ("\nCorrect Password. Access Granted\n");
    } else {
        printf ("\nWrong Password. Access Denied\n");
    }

    return 0;
}
