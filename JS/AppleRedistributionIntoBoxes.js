/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} apple
 * @param {number[]} capacity
 * @return {number}
 */
function minimumBoxes(apple, capacity) {
    let numberOfApples = 0;
    for (const a of apple) {
        numberOfApples += a;
    }

    capacity.sort((a, b) => a - b);
    let boxCapacity = 0;
    let numberOfBoxes = 0;

    for (let i = capacity.length - 1; i >= 0; i--) {
        boxCapacity += capacity[i];
        numberOfBoxes++;

        if (boxCapacity >= numberOfApples) {
            break;
        }
    }

    return numberOfBoxes;
}
export { minimumBoxes }
