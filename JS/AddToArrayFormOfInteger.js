/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} num
 * @param {number} k
 * @return {number[]}
 */
function addToArrayForm(num, k) {
    let numbers = num.join('');
    let numbers2 = k.toString();

    // Before proceeding further, make sure length of k is larger.
    if ( numbers.length > numbers2.length ) {
        let t = numbers;
        numbers = numbers2;
        numbers2 = t;
    }

    // Take an empty String for storing result
    let result = "";

    // Calculate length of both String
    let n1 = numbers.length, n2 = numbers2.length;

    // Reverse both of Strings
    numbers = numbers.split("").reverse().join("");
    numbers2 = numbers2.split("").reverse().join("");

    let carry = 0;
    for ( let i = 0; i < n1; i++ ) {
        // Do school mathematics, compute sum of current digits and carry
        let sum = ((numbers[i].charCodeAt(0) - '0'.charCodeAt(0)) + (numbers2[i].charCodeAt(0) - '0'.charCodeAt(0)) + carry);
        result += String.fromCharCode(sum % 10 + '0'.charCodeAt(0));

        // Calculate carry for next step
        carry = Math.floor(sum / 10);
    }

    // Add remaining digits of larger number
    for ( let i = n1; i < n2; i++ ) {
        let sum = ((numbers2[i].charCodeAt(0) - '0'.charCodeAt(0)) + carry);
        result += String.fromCharCode(sum % 10 + '0'.charCodeAt(0));
        carry = Math.floor(sum / 10);
    }

    // Add remaining carry
    if (carry > 0) result += String.fromCharCode(carry + '0'.charCodeAt(0));

    // reverse resultant String
    result = result.split("").reverse().join(',');
    return result.split();
}
export { addToArrayForm }
