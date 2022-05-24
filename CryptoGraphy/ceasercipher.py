
print("Enter message to encrypt")
msg = input()
print("Enter the key value")
key = int(input())
encrptedMsg = ""
for i in range(len(msg)):
	char = msg[i]
	encrptedMsg += chr((ord(char) + key - 97) % 26 + 97)
  
print ("Orginal Message : " + msg)
print ("Key: " + str(key))
print ("Encrpyted Message: " + encrptedMsg)
