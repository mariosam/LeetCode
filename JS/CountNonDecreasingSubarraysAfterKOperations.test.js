/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countNonDecreasingSubarrays } from './CountNonDecreasingSubarraysAfterKOperations.js'

TEST('Starting CountNonDecreasingSubarraysAfterKOperations test...', (t) => {
    //Test 1
    let want = 17
    let got = countNonDecreasingSubarrays( [6,3,1,2,4,4], 7 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = countNonDecreasingSubarrays( [6,3,1,3,6], 4 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
