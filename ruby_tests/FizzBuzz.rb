#!/usr/bin/ruby

for i in 1..150
	if i % 15 == 0
		puts "FizzBuzz"
	elsif i % 5 == 0
		puts "Buzz"
	elsif i % 3 == 0
		puts "Fizz"
	else
		puts i
	end
end
