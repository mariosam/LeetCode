/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} senate
 * @return {string}
 */
function predictPartyVictory(senate) {
    const sen = senate.split('');
    let idx = 0;

    while (true) {
        if (!sen.includes('R')) return 'Dire'
        if (!sen.includes('D')) return 'Radiant'
        const senator = sen[idx];

        if (senator === 'R') {
            if (sen.slice(idx + 1).includes('D')) {
                sen.splice(sen.slice(idx + 1).indexOf('D') + idx + 1, 1);
            } else {
                sen.splice(sen.indexOf('D'), 1);
            }
        } else if (senator === 'D') {
            if (sen.slice(idx + 1).includes('R')) {
                sen.splice(sen.slice(idx + 1).indexOf('R') + idx + 1, 1);
            } else {
                sen.splice(sen.indexOf('R'), 1);
            }
        }

        idx = idx === sen.length ? 0 : idx + 1;
    }
}
export { predictPartyVictory }
