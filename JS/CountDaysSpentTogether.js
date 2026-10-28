/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} arriveAlice
 * @param {string} leaveAlice
 * @param {string} arriveBob
 * @param {string} leaveBob
 * @return {number}
 */
function countDaysTogether(arriveAlice, leaveAlice, arriveBob, leaveBob) {
    const days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

    if (arriveAlice > leaveBob || arriveBob > leaveAlice) {
        return 0;
    }

    if (arriveAlice === leaveBob || arriveBob === leaveAlice) {
        return 1;
    }
    const maxArrive = arriveAlice > arriveBob ? arriveAlice : arriveBob;
    const minLeave = leaveAlice < leaveBob ? leaveAlice : leaveBob;
    const [m1, d1] = maxArrive.split('-').map(Number);
    const [m2, d2] = minLeave.split('-').map(Number);

    if (m1 === m2) {
        return d2 - d1 + 1;
    }
    let res = days[m1 - 1] - d1 + 1;

    for (let i = m1 + 1; i < m2; i++) {
        res += days[i - 1];
    }
    res += d2;

    return res;
}
export { countDaysTogether }
