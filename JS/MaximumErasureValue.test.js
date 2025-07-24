/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumUniqueSubarray } from './MaximumErasureValue.js'

TEST('Starting MaximumErasureValue test...', (t) => {
    //Test 1
    let want = 17
    let got = maximumUniqueSubarray( [4,2,4,5,6] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 8
    got = maximumUniqueSubarray( [5,2,1,2,5,2,1,2,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
