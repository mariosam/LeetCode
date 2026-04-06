/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} moves
 * @return {boolean}
 */
function judgeCircle(moves) {
    let x = 0, y = 0;

    for (let i = 0; i < moves.length; i++) {
        const move = moves[i];

        if (move === 'L') x++;
        else if (move === 'R') x--;
        else if (move === 'U') y++;
        else if (move === 'D') y--;
    }

    return x === 0 && y === 0;
}
export { judgeCircle }
