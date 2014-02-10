print "O preço do carro na fabrica: "
carro_fabrica = gets.to_i

percentual = (carro_fabrica * 28)/100
imposto = (carro_fabrica * 45)/100

preco_consumidor = carro_fabrica + percentual + imposto

puts "O preço do carro ao consumidor é de #{preco_consumidor}"
