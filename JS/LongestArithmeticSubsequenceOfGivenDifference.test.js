/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestSubsequence } from './LongestArithmeticSubsequenceOfGivenDifference.js'

TEST('Starting LongestArithmeticSubsequenceOfGivenDifference test...', (t) => {
    //Test 1
    let want = 4
    let got = longestSubsequence( [1,2,3,4], 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = longestSubsequence( [1,3,5,7], 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 4
    got = longestSubsequence( [1,5,7,8,5,3,4,2,1], -2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
