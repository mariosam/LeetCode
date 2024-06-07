/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} hand
 * @param {number} groupSize
 * @return {boolean}
 */
function isNStraightHand(hand, groupSize) {
    const cnt = new Map();
    for (const v of hand) {
        cnt.set(v, (cnt.get(v) || 0) + 1);
    }
    hand.sort((a, b) => a - b);
    for (const v of hand) {
        if (cnt.get(v) > 0) {
            for (let x = v; x < v + groupSize; x++) {
                if (!cnt.has(x) || cnt.get(x) === 0) {
                    return false;
                }
                cnt.set(x, cnt.get(x) - 1);
            }
        }
    }
    return true;
}
export { isNStraightHand }
