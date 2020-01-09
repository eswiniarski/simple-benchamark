package main

import "fmt"

func isPrime(n int) bool {
	for i := 2; i < n; i++ {
		if n%i == 0 {
			return false
		}
	}

	return true
}

func getPrime(n int) int {
	count := 0
	num := 2

	for n > count {
		if isPrime(num) {
			count++
		}

		num++
	}

	return num - 1
}

func main() {
	fmt.Print(getPrime(10001))
}
