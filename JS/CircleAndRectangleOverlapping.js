/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} radius
 * @param {number} xCenter
 * @param {number} yCenter
 * @param {number} x1
 * @param {number} y1
 * @param {number} x2
 * @param {number} y2
 * @return {boolean}
 */
function checkOverlap(radius, xCenter, yCenter, x1, y1, x2, y2) {
    let res = 0;

    if (xCenter < x1 || xCenter > x2) {
        res += Math.min(
            Math.pow(x1 - xCenter, 2),
            Math.pow(xCenter - x2, 2)
        );
    }

    if (yCenter < y1 || yCenter > y2) {
        res += Math.min(
            Math.pow(y1 - yCenter, 2),
            Math.pow(yCenter - y2, 2)
        );
    }
    return res <= radius * radius;
}
export { checkOverlap }
