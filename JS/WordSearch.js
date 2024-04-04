/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {character[][]} board
 * @param {string} word
 * @return {boolean}
 */
function exist(board, word) {
    if (word.length === 0) {
        return false;
    }
    const b = word.split('');
    for (let x = 0; x < board.length; x++) {
        for (let y = 0; y < board[x].length; y++) {
            if (dfs(x, y, board, b)) {
                return true;
            }
        }
    }
    return false;
}

function dfs(x, y, board, word) {
    if (x < 0 || x >= board.length) {
        return false;
    }
    if (y < 0 || y >= board[x].length) {
        return false;
    }
    if (board[x][y] !== word[0]) {
        return false;
    }
    if (word.length === 1) {
        return true;
    }
    const tmp = board[x][y];
    board[x][y] = '-';
    const found = dfs(x + 1, y, board, word.slice(1)) ||
                  dfs(x - 1, y, board, word.slice(1)) ||
                  dfs(x, y + 1, board, word.slice(1)) ||
                  dfs(x, y - 1, board, word.slice(1));
    board[x][y] = tmp;
    return found;
}
export { exist }
