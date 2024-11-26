/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[][]} board
 * @return {number}
 */
function slidingPuzzle(board) {
    const m = new Set();
    let b = "";
    const q = [];
    const moves = [[1, 0], [-1, 0], [0, 1], [0, -1]];
    const target = "123450";

    for (const row of board) {
        for (const val of row) {
            b += val;
        }
    }

    if (b === target) {
        return 0;
    }

    m.add(b);
    q.push(b);
    let t = 1;

    while (q.length) {
        for (let i = q.length; i > 0; i--) {
            const s = q.shift();
            const idx = s.indexOf("0");
            const x = Math.floor(idx / 3), y = idx % 3;

            for (const [dx, dy] of moves) {
                const nx = x + dx, ny = y + dy;
                if (nx < 0 || nx >= 2 || ny < 0 || ny >= 3) {
                    continue;
                }

                const tmp = s.split("");
                const newIdx = nx * 3 + ny;
                [tmp[idx], tmp[newIdx]] = [tmp[newIdx], tmp[idx]];

                const newS = tmp.join("");
                if (newS === target) {
                    return t;
                }

                if (!m.has(newS)) {
                    m.add(newS);
                    q.push(newS);
                }
            }
        }
        t++;
    }
    return -1;
}
export { slidingPuzzle }
