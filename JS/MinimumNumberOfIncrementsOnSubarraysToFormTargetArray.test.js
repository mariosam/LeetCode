/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minNumberOperations } from './MinimumNumberOfIncrementsOnSubarraysToFormTargetArray.js'

TEST('Starting MinimumNumberOfIncrementsOnSubarraysToFormTargetArray test...', (t) => {
    //Test 1
    let want = 3
    let got = minNumberOperations( [1,2,3,2,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 4
    got = minNumberOperations( [3,1,1,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 7
    got = minNumberOperations( [3,1,5,4,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
