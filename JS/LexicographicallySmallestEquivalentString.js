/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} s1
 * @param {string} s2
 * @param {string} baseStr
 * @return {string}
 */
function smallestEquivalentString(s1, s2, baseStr) {
    const p = Array.from({ length: 26 }, (_, i) => i);

    function find(x) {
        if (p[x] !== x) {
            p[x] = find(p[x]);
        }
        return p[x];
    }

    for (let i = 0; i < s1.length; i++) {
        const x = s1.charCodeAt(i) - 97;
        const y = s2.charCodeAt(i) - 97;
        const px = find(x);
        const py = find(y);
        if (px < py) {
            p[py] = px;
        } else {
            p[px] = py;
        }
    }

    return [...baseStr]
        .map(c => String.fromCharCode(97 + find(c.charCodeAt(0) - 97)))
        .join('');
}
export { smallestEquivalentString }
