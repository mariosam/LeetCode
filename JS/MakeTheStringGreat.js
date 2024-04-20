/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @return {string}
 */
function makeGood(s) {
    const stack = [];
    for (let i = 0; i < s.length; i++) {
        if (stack.length !== 0 && (s[i].charCodeAt(0) === stack[stack.length - 1].charCodeAt(0) + 32 || s[i].charCodeAt(0) === stack[stack.length - 1].charCodeAt(0) - 32)) {
            stack.pop();
            continue;
        }
        stack.push(s[i]);
    }
    return stack.join('');
}
export { makeGood }
