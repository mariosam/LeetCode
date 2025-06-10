/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} n
 * @return {number[]}
 */
function lexicalOrder(n) {
    const list = [];
    let curr = 1;

    for (let i = 1; i <= n; i++) {
        list.push(curr);
        if (curr * 10 <= n) {
            curr *= 10;
        } else if (curr % 10 !== 9 && curr + 1 <= n) {
            curr++;
        } else {
            while (Math.floor(curr / 10) % 10 === 9) {
                curr = Math.floor(curr / 10);
            }
            curr = Math.floor(curr / 10) + 1;
        }
    }

    return list;
}
export { lexicalOrder }
