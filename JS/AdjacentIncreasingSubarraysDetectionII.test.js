/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxIncreasingSubarrays } from './AdjacentIncreasingSubarraysDetectionII.js'

TEST('Starting AdjacentIncreasingSubarraysDetectionII test...', (t) => {
    //Test 1
    let want = 3
    let got = maxIncreasingSubarrays( [2,5,7,8,9,2,3,4,3,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = maxIncreasingSubarrays( [1,2,3,4,4,4,4,5,6,7] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
