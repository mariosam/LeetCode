/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} stones
 * @return {number}
 */
function lastStoneWeight(stones) {
    if ( stones.length < 2 ) return stones[0];
    stones.sort((a,b) => a-b);

    let a = stones.pop();
    let b = stones.pop();
    stones.push(a-b);
		
    return lastStoneWeight(stones);
}
export { lastStoneWeight }
