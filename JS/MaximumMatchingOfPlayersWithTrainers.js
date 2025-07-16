/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} players
 * @param {number[]} trainers
 * @return {number}
 */
function matchPlayersAndTrainers(players, trainers) {
    players.sort((a, b) => a - b);
    trainers.sort((a, b) => a - b);

    let i = 0, j = 0, res = 0;
    const m = players.length, n = trainers.length;

    while (i < m && j < n) {
        if (players[i] <= trainers[j]) {
            res++;
            i++;
            j++;
        } else {
            j++;
        }
    }

    return res;
}
export { matchPlayersAndTrainers }
