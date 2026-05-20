/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} arr
 * @param {number} start
 * @return {boolean}
 */
function canReach(arr, start) {
    const n = arr.length;
    const queue = [];
    let front = 0;
    const visited = new Array(n).fill(false);
    queue.push(start);
    visited[start] = true;

    while (front < queue.length) {
        const cur = queue[front];
        front++;

        if (arr[cur] === 0) {
            return true;
        }

        const next1 = cur - arr[cur];
        const next2 = cur + arr[cur];

        if (next1 >= 0 && !visited[next1]) {
            queue.push(next1);
            visited[next1] = true;
        }

        if (next2 < n && !visited[next2]) {
            queue.push(next2);
            visited[next2] = true;
        }
    }
    return false;
}
export { canReach }
