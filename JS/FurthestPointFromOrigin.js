/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} moves
 * @return {number}
 */
function furthestDistanceFromOrigin(moves) {
    const movesMap = {};

    for (const move of moves) {
        movesMap[move] = (movesMap[move] || 0) + 1;
    }

    const r = movesMap['R'] || 0;
    const l = movesMap['L'] || 0;
    const u = movesMap['_'] || 0;

    if (r > l) {
        return u + r - l;
    } else {
        return u + l - r;
    }
}
export { furthestDistanceFromOrigin }
