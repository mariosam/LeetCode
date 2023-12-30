/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minOperations } from './MinimumOperationsToReduceXtoZero.js'

TEST('Starting MinimumOperationsToReduceXtoZero test...', (t) => {
    //Test 1
    let want = 2
    let got = minOperations( [1,1,4,2,3], 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = minOperations( [5,6,7,8,9], 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 5
    got = minOperations( [3,2,20,1,1,3], 10 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
