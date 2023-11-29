/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minOperations } from './MinimumNumberOfOperationsToMakeArrayContinuous.js'

TEST('Starting MinimumNumberOfOperationsToMakeArrayContinuous test...', (t) => {
    //Test 1
    let want = 0
    let got = minOperations( [4,2,5,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = minOperations( [1,2,3,5,6] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 3
    got = minOperations( [1,10,100,1000] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
