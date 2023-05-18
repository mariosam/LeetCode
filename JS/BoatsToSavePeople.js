/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} people
 * @param {number} limit
 * @return {number}
 */
function numRescueBoats(people, limit) {
    people.sort((a, b) => a - b);
    let count = 0;
    let i = 0;
    let j = people.length - 1;

    while (i <= j) {
        count++;
        if (i === j) break;
        if (people[i] + people[j] <= limit) i++;
        j--;
    }

    return count;
}
export { numRescueBoats }
