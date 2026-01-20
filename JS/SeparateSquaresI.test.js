/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { separateSquares } from './SeparateSquaresI.js'

TEST('Starting SeparateSquaresI test...', (t) => {
    // Test 1
    let want = 1.00000
    let got = separateSquares([[0,0,1],[2,2,1]])
    t.assert(almostEqual(want, got), `Expect: ${want}, Got: ${got}`)

    // Test 2
    want = 1.16667
    got = separateSquares([[0,0,2],[1,1,1]])
    t.assert(almostEqual(want, got), `Expect: ${want}, Got: ${got}`)

    t.end()
})

function almostEqual(a, b, eps = 1e-5) {
    return Math.abs(a - b) < eps
}
