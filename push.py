from os import system

message = input('message: ')

system('git config user.name "JAMB123"')
system('git config user.email "jamblpa476@gmail.com"')
system('git add .')
system('git commit -m "' + message + '"')
system('git push origin master')