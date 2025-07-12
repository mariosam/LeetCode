/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} eventTime
 * @param {number[]} startTime
 * @param {number[]} endTime
 * @return {number}
 */
function maxFreeTime(eventTime, startTime, endTime) {
    const n = startTime.length;

    const get = (i) => {
        if (i === 0) return startTime[0];
        else if (i === n) return eventTime - endTime[i - 1];
        return startTime[i] - endTime[i - 1];
    };

    let a = 0, b = -1, c = -1;
    for (let i = 1; i <= n; i++) {
        const sz = get(i);
        if (sz > get(a)) {
            [a, b, c] = [i, a, b];
        } else if (b < 0 || sz > get(b)) {
            [b, c] = [i, b];
        } else if (c < 0 || sz > get(c)) {
            c = i;
        }
    }

    let ans = 0;
    for (let i = 0; i < n; i++) {
        const s = startTime[i], e = endTime[i];
        const sz = e - s;
        if ((i !== a && i + 1 !== a && get(a) >= sz) ||
            (i !== b && i + 1 !== b && get(b) >= sz) ||
            (i !== c && i + 1 !== c && get(c) >= sz)) {
            ans = Math.max(ans, get(i) + get(i + 1) + sz);
        } else {
            ans = Math.max(ans, get(i) + get(i + 1));
        }
    }

    return ans;
}
export { maxFreeTime }
