print "Idade em anos: "
anos = gets.to_i
print "Idade em meses: "
meses = gets.to_i
print "Idade em dias: "
dias = gets.to_i

total = (anos * 360) + (meses * 30) + dias

puts "Sua idade em dias é : ", total
