/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minOperations } from './MinimumOperationsToExceedThresholdValueII.js'

TEST('Starting MinimumOperationsToExceedThresholdValueII test...', (t) => {
    //Test 1
    let want = 2
    let got = minOperations( [2,11,10,1,3], 10 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = minOperations( [1,1,2,4,9], 20 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
