/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} hour
 * @param {number} minutes
 * @return {number}
 */
function angleClock(hour, minutes) {
    let minAngle = minutes * 360 / 60;
    let hourAnglePart1 = hour !== 12 ? (hour * 360) / 12 : 0;
    let hourAnglePart2 = (30 * minutes) / 60.0;
    let hourAngle = hourAnglePart1 + hourAnglePart2;
    let preResult = Math.abs(minAngle - hourAngle);

    return preResult > 180 ? 360 - preResult : preResult;
}
export { angleClock }
