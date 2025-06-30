/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numSubseq } from './NumberOfSubsequencesThatSatisfyTheGivenSumCondition.js'

TEST('Starting NumberOfSubsequencesThatSatisfyTheGivenSumCondition test...', (t) => {
    //Test 1
    let want = 4
    let got = numSubseq( [3,5,6,7], 9 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = numSubseq( [3,3,6,8], 10 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 61
    got = numSubseq( [2,3,3,4,6,7], 12 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
