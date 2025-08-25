/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestSubarray } from './LongestSubarrayOf1sAfterDeletingOneElement.js'

TEST('Starting LongestSubarrayOf1sAfterDeletingOneElement test...', (t) => {
    //Test 1
    let want = 3
    let got = longestSubarray( [1,1,0,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 5
    got = longestSubarray( [0,1,1,1,0,1,1,0,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = longestSubarray( [1,1,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
