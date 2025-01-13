/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {string} locked
 * @return {boolean}
 */
function canBeValid(s, locked) {
    if (s.length % 2 !== 0) {
        return false;
    }

    let total = 0, open = 0, closed = 0;

    for (let i = s.length - 1; i >= 0; i--) {
        if (locked[i] === '0') {
            total++;
        } else if (s[i] === '(') {
            open++;
        } else if (s[i] === ')') {
            closed++;
        }
        if (total - open + closed < 0) {
            return false;
        }
    }

    total = open = closed = 0;

    for (let i = 0; i < s.length; i++) {
        if (locked[i] === '0') {
            total++;
        } else if (s[i] === '(') {
            open++;
        } else if (s[i] === ')') {
            closed++;
        }
        if (total + open - closed < 0) {
            return false;
        }
    }

    return true;
}
export { canBeValid }
