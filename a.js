function is_prime(n) {
    for (i=2; i<n; i++) {
        if (n % i == 0) {
            return false;
        }
    }

    return true;
}

function get_prime(n) {
    let count = 0;
    let num = 2;

    while(n > count) {
        if (is_prime(num)) {
            count++;
        }
        
        num++;
    }

    return num - 1;
}

console.log(get_prime(10001));