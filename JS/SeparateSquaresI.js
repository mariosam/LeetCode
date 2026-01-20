/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} squares
 * @return {number}
 */
function separateSquares(squares) {
    let halfArea = 0;
    for (const [, , l] of squares) {
        halfArea += l * l;
    }
    halfArea /= 2;

    const events = [];
    for (const [, y, l] of squares) {
        events.push([y, 1, l]);
        events.push([y + l, 0, l]);
    }

    events.sort((a, b) => a[0] - b[0]);

    let area = 0;
    let width = 0;
    let prevY = 0;

    for (const [y, type, l] of events) {
        const gain = width * (y - prevY);
        if (area + gain >= halfArea) {
            return prevY + (halfArea - area) / width;
        }
        area += gain;
        width += type === 1 ? l : -l;
        prevY = y;
    }

    throw new Error("Invalid input");
}
export { separateSquares }
