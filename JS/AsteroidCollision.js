/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number[]} asteroids
 * @return {number[]}
 */
function asteroidCollision(asteroids) {
    let ans = [];

    for (let i = 0; i < asteroids.length; i++) {
        ans.push(asteroids[i]);

        let j = ans.length - 1;
        while (j >= 1) {
            if (ans[j] === 0) {
                ans.splice(j, 1);
                break;
            }

            if (ans[j - 1] < 0 || ans[j] > 0) {
                break;
            }

            if (ans[j - 1] === -ans[j]) {
                ans.splice(j - 1, 2);
                j--;
            } else if (ans[j - 1] > -ans[j]) {
                ans.splice(j, 1);
                break;
            } else {
                ans[j - 1] = ans[j];
                ans.splice(j, 1);
            }

            j--;
        }
    }

    return ans;
}
export { asteroidCollision }
