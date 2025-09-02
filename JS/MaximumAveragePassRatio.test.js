/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxAverageRatio } from './MaximumAveragePassRatio.js'

TEST('Starting MaximumAveragePassRatio test...', (t) => {
    // Função auxiliar para comparação de floats
    const isCloseEnough = (a, b, epsilon = 1e-5) => Math.abs(a - b) < epsilon;

    // Test 1
    let want = 0.78333;
    let got = maxAverageRatio([[1,2],[3,5],[2,2]], 2);
    t.assert(isCloseEnough(want, got), "Expect: " + want + ", Got: " + got);

    // Test 2
    want = 0.53485;
    got = maxAverageRatio([[2,4],[3,9],[4,5],[2,10]], 4);
    t.assert(isCloseEnough(want, got), "Expect: " + want + ", Got: " + got);

    t.end();
});
