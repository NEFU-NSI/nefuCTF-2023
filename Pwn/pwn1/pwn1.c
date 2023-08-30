#include<stdio.h>
void shell_pwn(){
    system("/bin/sh");
}

int main(){
    printf("do you know stack overflow\n");
    char buf[120];
    gets(buf);
    printf("buf: %s\n",buf);
    return 0;
}
