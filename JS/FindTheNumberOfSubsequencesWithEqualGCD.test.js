/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { subsequencePairCount } from './FindTheNumberOfSubsequencesWithEqualGCD.js'

TEST('Starting FindTheNumberOfSubsequencesWithEqualGCD test...', (t) => {
    //Test 1
    let want = 10
    let got = subsequencePairCount( [1,2,3,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = subsequencePairCount( [10,20,30] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 50
    got = subsequencePairCount( [1,1,1,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
