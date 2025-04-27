/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countInterestingSubarrays } from './CountOfInterestingSubarrays.js'

TEST('Starting CountOfInterestingSubarrays test...', (t) => {
    //Test 1
    let want = 3
    let got = countInterestingSubarrays( [3,2,4], 2, 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = countInterestingSubarrays( [3,1,9,6], 3, 0 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
