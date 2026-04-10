/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} encodedText
 * @param {number} rows
 * @return {string}
 */

function decodeCiphertext(encodedText, rows) {
    const size = encodedText.length;
    if (rows === 1 || size <= 1) {
        return encodedText;
    }

    const cols = Math.floor(size / rows);
    let posX = 0, posY = 0;
    let ret = '';

    while (posY < cols) {
        const index = posX * cols + posY;
        ret += encodedText[index];

        posX++;
        posY++;

        if (posX >= rows) {
            posX = 0;
            posY = posY - rows + 1;
        }
    }

    return ret.replace(/\s+$/, '');
}
export { decodeCiphertext }
