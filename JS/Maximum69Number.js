/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} num
 * @return {number}
 */
function maximum69Number(num) {
    let numCopy = num;
    let indexSix = -1;
    let currDigit = 0;

    while (numCopy > 0) {
        if (numCopy % 10 === 6) {
            indexSix = currDigit;
        }
        numCopy = Math.floor(numCopy / 10);
        currDigit++;
    }

    return indexSix === -1 ? num : num + 3 * Math.pow(10, indexSix);
}
export { maximum69Number }
