/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestCommonSubsequence } from './LongestCommonSubsequence.js'

TEST('Starting LongestCommonSubsequence test...', (t) => {
    //Test 1
    let want = 3
    let got = longestCommonSubsequence( "abcde", "ace" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = longestCommonSubsequence( "abc", "abc" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = longestCommonSubsequence( "abc", "def" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
