/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} mass
 * @param {number[]} asteroids
 * @return {boolean}
 */
function asteroidsDestroyed(mass, asteroids) {
    let total = mass;
    asteroids.sort((a, b) => a - b);

    for (const asteroid of asteroids) {
        if (asteroid > total) {
            return false;
        }
        total += asteroid;
    }
    return true;
}
export { asteroidsDestroyed }
