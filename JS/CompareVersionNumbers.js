/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} version1
 * @param {string} version2
 * @return {number}
 */
function compareVersion(version1, version2) {
    let i = 0;
    let j = 0;

    while (i < version1.length || j < version2.length) {
        let temp1 = 0;
        let temp2 = 0;

        while (i < version1.length && version1[i] !== '.') {
            temp1 = temp1 * 10 + parseInt(version1[i]);
            i++;
        }

        while (j < version2.length && version2[j] !== '.') {
            temp2 = temp2 * 10 + parseInt(version2[j]);
            j++;
        }

        if (temp1 === temp2) {
            i++;
            j++;
            continue;
        } else if (temp1 < temp2) {
            return -1;
        } else {
            return 1;
        }
    }

    return 0;
}
export { compareVersion }
