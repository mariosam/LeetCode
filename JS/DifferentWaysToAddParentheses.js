/**
 * @version JAVASCRIPT ECMAScript 6
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */

/**
 * @param {string} expression
 * @return {number[]}
 */
function diffWaysToCompute(expression) {
    const result = [];
    for (let i = 0; i < expression.length; i++) {
        const char = expression[i];
        if (char === '+' || char === '-' || char === '*') {
            const left = diffWaysToCompute(expression.substring(0, i));
            const right = diffWaysToCompute(expression.substring(i + 1));
            
            for (let l of left) {
                for (let r of right) {
                    if (char === '+') {
                        result.push(l + r);
                    } else if (char === '-') {
                        result.push(l - r);
                    } else if (char === '*') {
                        result.push(l * r);
                    }
                }
            }
        }
    }
    
    if (result.length === 0) {
        result.push(parseInt(expression));
    }
    return result;
}
export { diffWaysToCompute }
