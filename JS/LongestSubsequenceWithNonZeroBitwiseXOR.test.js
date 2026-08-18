/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestSubsequence } from './LongestSubsequenceWithNonZeroBitwiseXOR.js'

TEST('Starting LongestSubsequenceWithNonZeroBitwiseXOR test...', (t) => {
    //Test 1
    let want = 2
    let got = longestSubsequence( [1,2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = longestSubsequence( [2,3,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
