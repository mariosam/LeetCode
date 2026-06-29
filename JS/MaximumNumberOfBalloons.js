/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} text
 * @return {number}
 */
function maxNumberOfBalloons(text) {
    const map = new Map();
    const set = new Set();

    for (const ch of text) {
        map.set(ch, (map.get(ch) || 0) + 1);
    }
    let min = text.length;

    for (const [ch, count] of map.entries()) {
        if (ch === 'b' || ch === 'a' || ch === 'n') {
            min = Math.min(min, count);
            set.add(ch);
        }

        if (ch === 'o' || ch === 'l') {
            min = Math.min(min, Math.floor(count / 2));
            set.add(ch);
        }
    }
    return set.size === 5 ? min : 0;
};
export { maxNumberOfBalloons }
