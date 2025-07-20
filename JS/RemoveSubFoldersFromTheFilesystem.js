/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} folder
 * @return {string[]}
 */
function removeSubfolders(folder) {
    folder.sort();
    const res = [folder[0]];
    let prev = folder[0];

    for (let i = 1; i < folder.length; i++) {
        const s = folder[i];
        if (s.startsWith(prev) && s.charAt(prev.length) === '/') {
            // é subpasta, pula
            continue;
        } else {
            res.push(s);
            prev = s;
        }
    }

    return res;
}
export { removeSubfolders }
