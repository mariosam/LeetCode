/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} expression
 * @return {boolean}
 */
function parseBoolExpr(expression) {
    let st = [];
    let c = [];

    for (let ch of expression) {
        if (ch === '&' || ch === '|' || ch === '!') {
            st.push(ch);
        } else if (ch === ')') {
            let op = st.pop();
            let f = op === '&';

            while (c[c.length - 1] !== '(') {
                let val = c.pop() === 't';
                if (op === '&') {
                    f = f && val;
                } else {
                    f = f || val;
                }
            }
            c.pop(); // Remove the '('

            if (op === '!') {
                f = !f;
            }

            c.push(f ? 't' : 'f');
        } else if (ch !== ',') {
            c.push(ch);
        }
    }

    return c[0] === 't';
}
export { parseBoolExpr }
