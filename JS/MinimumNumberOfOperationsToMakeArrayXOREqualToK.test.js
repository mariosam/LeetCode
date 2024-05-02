/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minOperations } from './MinimumNumberOfOperationsToMakeArrayXOREqualToK.js'

TEST('Starting MinimumNumberOfOperationsToMakeArrayXOREqualToK test...', (t) => {
    //Test 1
    let want = 2
    let got = minOperations( [2,1,3,4], 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = minOperations( [2,0,2,0], 0 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
