/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} details
 * @return {number}
 */
function countSeniors(details) {
    let num = 0;
    for (let i = 0; i < details.length; i++) {
        const age = Number(details[i].slice(11, 13));
        if (age > 60) {
        num++;
        }
    }
    return num;
}
export { countSeniors }
