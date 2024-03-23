/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} order
 * @param {string} s
 * @return {string}
 */
function customSortString(order, s) {
    const dict = {};
    for (let i = 0; i < order.length; i++) {
        dict[order[i]] = i + 1;
    }
    let remain = '';
    let arr = '';
    for (let i = 0; i < s.length; i++) {
        if (dict[s[i]]) {
        arr = arr + s[i];
        } else {
        remain = remain + s[i];
        }
    }
    arr = arr.split('').sort((a, b) => dict[a] > dict[b] ? 1 : -1);
    return arr.join('') + remain;
}
export { customSortString }
