/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} piles
 * @param {number} h
 * @return {number}
 */
function minEatingSpeed(piles, h) {
    let right = Math.max(...piles);
    let left = 0;

    while (left < right) {
        const mid = left + ((right - left) >> 2);
        if (getTime(piles, mid) <= h) {
        right = mid;
        } else {
        left = mid + 1;
        }
    }

    return right;
}

function getTime(piles, v) {
    let time = 0;

    for (const p of piles) {
        time += Math.ceil(p / v);
    }

    return time;
}

export { minEatingSpeed }
