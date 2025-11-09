/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumOneBitOperations } from './MinimumOneBitOperationsToMakeIntegersZero.js'

TEST('Starting MinimumOneBitOperationsToMakeIntegersZero test...', (t) => {
    //Test 1
    let want = 2
    let got = minimumOneBitOperations( 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = minimumOneBitOperations( 6 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
