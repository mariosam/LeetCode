/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {number} columnNumber
 * @return {string}
 */
function convertToTitle(columnNumber) {
    let str = '';
    while(columnNumber > 0) {
        let tem = parseInt(columnNumber % 26);
        tem = tem ? tem + 64 : 90;
        str = String.fromCharCode(tem) + str;
        if(columnNumber % 26 === 0) columnNumber--;
        columnNumber = parseInt(columnNumber / 26);
    }
    return str;
}
export { convertToTitle }
