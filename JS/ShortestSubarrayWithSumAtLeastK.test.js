/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { shortestSubarray } from './ShortestSubarrayWithSumAtLeastK.js'

TEST('Starting ShortestSubarrayWithSumAtLeastK test...', (t) => {
    //Test 1
    let want = 1
    let got = shortestSubarray( [1], 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = shortestSubarray( [1,2], 4 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 3
    got = shortestSubarray( [2,-1,2], 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
