#READ any READMEs in subfolders before deployment

References:

Git branch setup: https://chatgpt.com/c/66f141e5-cf84-800c-9145-44c62258f3e0

Fixing CORS blocking: https://chatgpt.com/c/66f3f9d4-a9a4-800c-b55f-a8dd26a41bb5

# This project runs as such:

GitHub Pages for frontend + Serv00<OR other host for serving dynamic content>

Has two branches:

## main

(Both frontend and backend (PHP)) Deployable where hosts won't likely suspend the account hence no need for cross-hosting
(Backend) Dynamic content paths (contact/) call scripts in the same hosting location

## cross-hosting

(Frontend) Hosted on GitHub Pages (or other 'friendly' host)
(Backend) Dynamic content paths (e.g contact/) call scripts in different hosting locations (eg Serv00)

Has two accounts
G-bit94 -----> origin
payupfrancesca -----> secondremote (account2's remote GitHub repo) -----> cindymakena

## Cindy

Your identification has been saved in /c/Users/Admin/.ssh/id_rsa_account2.
Your public key has been saved in /c/Users/Admin/.ssh/id_rsa_account2.pub.

The key fingerprint is:
SHA256:EumY06z6O9ml6eQQ2CrlsHRLItAPUGrKJ3NDZfXjSYc cindymakena33@gmail.com

The key's randomart image is:

`+---[RSA 4096]----+
|... o.. |
| + o .. . |
|o.o. o E . |
|= .= * .o + |
|+*o\*B = So |
|o=O.o+ .. |
|o o.oo.+ |
| . .o++ |
| ..o+o |
+----[SHA256]-----+`
