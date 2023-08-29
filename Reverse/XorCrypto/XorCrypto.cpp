#include <Windows.h>
#include <stdio.h>
#include <stdlib.h>

#define WRONG

int main() {
    // flag{x0r_is_reversible}
    char flag[100];
    int  enc[] = {0x45, 0x4f, 0x42, 0x44, 0x58, 0x5b, 0x13, 0x51, 0x7c, 0x4a, 0x50, 0x7c, 0x51, 0x46, 0x55, 0x46, 0x51, 0x50, 0x4a, 0x41, 0x4f, 0x46, 0x5e};

    puts("Please give your flag:");
    gets(flag);

    int len = strlen(flag);

    if (len != 23) {
        puts("Invalid Length!");
        system("Pause");
        exit(1);
    }

    char magic = 0x23;

    for (int i = 0; i < len; ++i) {
        flag[i] ^= magic;
    }
    for (int i = 0; i < len; ++i) {
        if (flag[i] != enc[i]) {
            puts("Your flag is wrong!");
            system("Pause");
            exit(1);
        }
    }

    puts("Your flag is correct!");

    return 0;
}
