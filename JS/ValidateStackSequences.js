/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} pushed
 * @param {number[]} popped
 * @return {boolean}
 */
function validateStackSequences(pushed, popped) {
    const stack = [];
    const { length } = pushed;
    if (length <= 1) return true;

    let popIndex = 0;
    for (let i = 0; i < length; i++) {
        stack.push(pushed[i]);
        while (stack.length && stack[stack.length - 1] === popped[popIndex]) {
            stack.pop();
            popIndex++;
        }
    }

    return stack.length === 0;
}
export { validateStackSequences }
