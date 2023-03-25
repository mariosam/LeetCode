/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} flowerbed
 * @param {number} n
 * @return {boolean}
 */
function canPlaceFlowers(flowerbed, n) {
    for ( let i=0; i < flowerbed.length && n > 0; i++ ) {
		if ( flowerbed[i] === 0 &&	flowerbed[i - 1] !== 1 &&	flowerbed[i + 1] !== 1 ) {
			n--;
			i++;
		}
	}

	return n === 0;
}
export { canPlaceFlowers }
