/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestSubarray } from './LongestSubarrayWithMaximumBitwiseAND.js'

TEST('Starting LongestSubarrayWithMaximumBitwiseAND test...', (t) => {
    //Test 1
    let want = 2
    let got = longestSubarray( [1,2,3,3,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = longestSubarray( [1,2,3,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
