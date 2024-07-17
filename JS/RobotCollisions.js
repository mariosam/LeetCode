/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} positions
 * @param {number[]} healths
 * @param {string} directions
 * @return {number[]}
 */
function survivedRobotsHealths(positions, healths, directions) {
    let arr = positions.map((p, i) => ({ i, p, h: healths[i], d: directions[i] }));
    arr.sort((a, b) => a.p - b.p);

    let toLeft = [];
    let st = [];

    for (let p of arr) {
        if (p.d === 'R') {
            st.push(p);
            continue;
        }

        while (st.length > 0) {
            let top = st[st.length - 1];
            if (top.h > p.h) {
                top.h--;
                break;
            }
            if (top.h === p.h) {
                st.pop();
                p.h = 0;
                break;
            }
            p.h--;
            st.pop();
        }
        if (st.length === 0 && p.h !== 0) {
            toLeft.push(p);
        }
    }

    toLeft = toLeft.concat(st);
    toLeft.sort((a, b) => a.i - b.i);

    return toLeft.map(d => d.h);
}
export { survivedRobotsHealths }
