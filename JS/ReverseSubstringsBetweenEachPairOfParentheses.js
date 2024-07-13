/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {string}
 */
function reverseParentheses(s) {
    let stk = [];
    for (let char of s) {
        if (char === ')') {
            let t = [];
            while (stk[stk.length - 1] !== '(') {
                t.push(stk.pop());
            }
            stk.pop(); // remove '('
            stk.push(...t);
        } else {
            stk.push(char);
        }
    }
    return stk.join('');
}
export { reverseParentheses }
