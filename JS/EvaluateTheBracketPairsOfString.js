/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s
 * @param {string[][]} knowledge
 * @return {string}
 */
function evaluate(s, knowledge) {
    if (s.length === 1) {
        return s;
    }
    const map = new Map();

    for (const info of knowledge) {
        const key = info[0];
        const value = info[1];
        map.set(key, value);
    }
    let sb = '';

    for (let i = 0; i < s.length;) {
        const current = s[i];

        if (current === ')') {
            i++;
            continue;
        } else if (current !== '(') {
            sb += current;
            i++;
        } else {
            let key = '';
            i++;

            while (s[i] !== ')') {
                key += s[i];
                i++;
            }

            if (map.has(key)) {
                sb += map.get(key);
            } else {
                sb += '?';
            }
        }
    }
    return sb;
}
export { evaluate }
