print "Digite seu salário: "
salario = gets.to_i
print "Digite o reajuste: "
reajuste = gets.to_i

total_reajuste = (salario * reajuste)/ 100
novo_salario = salario + total_reajuste

puts "Novo salário com reajuste: R$ #{novo_salario}"
