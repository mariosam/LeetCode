/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} mapping
 * @param {number[]} nums
 * @return {number[]}
 */
function sortJumbled(mapping, nums) {
    return nums.map((item, index) => {
        return {
            item,
            index,
            mapped: +`${item}`.split('').map((index2) => mapping[index2]).join(''),
        };
    }).sort((a, b) => {
        if (a.mapped !== b.mapped) {
            return a.mapped - b.mapped;
        }
        return a.index - b.index;
    }).map(item => item.item);
}
export { sortJumbled }
