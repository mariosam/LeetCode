/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxSum } from './ApplyOperationsOnArrayToMaximizeSumOfSquares.js'

TEST('Starting ApplyOperationsOnArrayToMaximizeSumOfSquares test...', (t) => {
    //Test 1
    let want = 261
    let got = maxSum( [2,6,5,8], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2s
    want = 90
    got = maxSum( [4,5,4,7], 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
