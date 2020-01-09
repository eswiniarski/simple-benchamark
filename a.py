def is_prime(n):
  for i in range(2, n):
    if (n % i == 0):
      return False
  return True

def get_prime(n):
  count = 0
  num = 2
  while n > count:
    if is_prime(num):
      count += 1
    num += 1
  return num - 1

print(get_prime(10001));