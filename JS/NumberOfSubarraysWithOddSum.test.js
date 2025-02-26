/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numOfSubarrays } from './NumberOfSubarraysWithOddSum.js'

TEST('Starting NumberOfSubarraysWithOddSum test...', (t) => {
    //Test 1
    let want = 4
    let got = numOfSubarrays( [1,3,5] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = numOfSubarrays( [2,4,6] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 16
    got = numOfSubarrays( [1,2,3,4,5,6,7] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
