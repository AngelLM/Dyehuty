outfile = open('list.txt', 'a')
varStop='Y'
while (varStop!='N') and (varStop!='n'):
	newPalabra = raw_input('Introduce la palabra nueva: ')
	outfile.write(newPalabra+'\n')
	varStop = raw_input('Quieres introducir una nueva palabra (Y/n): ')
outfile.close()
lista_ordenada=sorted(file("list.txt"))
file("list.txt","w").writelines(lista_ordenada)
