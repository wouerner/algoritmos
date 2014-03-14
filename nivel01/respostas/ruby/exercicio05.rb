print "Numero de votos dos eleitores: "
eleitores = gets.to_i
print "Numero de votos em branco do total de votos do eleitores: "
brancos = gets.to_i
print "Numero de votos nulos do total de votos do eleitores: "
nulos = gets.to_i
validos = eleitores - (brancos + nulos)
puts "Numero de votos validos: #{validos} "


total_brancos =(brancos * 100) / eleitores
total_nulos = (nulos * 100) / eleitores
total_validos = (validos * 100)/ eleitores

puts "#{total_brancos}% foram votos brancos dos eleitores"
puts "#{total_nulos}% foram votos nulos dos eleitores"
puts "#{total_validos}% foram votos validos do eleitores"
