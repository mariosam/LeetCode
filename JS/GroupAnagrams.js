/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string[]} strs
 * @return {string[][]}
 */
function groupAnagrams(strs) {
    let hashmap = {};

    for (let str of strs) {
        let tmp = str.split('');
        tmp.sort();
        let sortStr = tmp.join('');
        hashmap[sortStr] = (hashmap[sortStr] || []).concat(str);
    }

    return Object.values(hashmap);
}
export { groupAnagrams }
