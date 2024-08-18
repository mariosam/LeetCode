/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} bills
 * @return {boolean}
 */
function lemonadeChange(bills) {
    let five = 0, ten = 0;

    for (let i = 0; i < bills.length; i++) {
        if (bills[i] === 5) {
            five++;
        } else if (bills[i] === 10) {
            five--;
            ten++;
        } else if (ten > 0) {
            ten--;
            five--;
        } else {
            five -= 3;
        }

        if (five < 0) {
            return false;
        }
    }

    return true;
}
export { lemonadeChange }
