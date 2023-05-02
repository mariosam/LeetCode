/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestPalindromeSubseq } from './LongestPalindromicSubsequence.js'

TEST('Starting LongestPalindromicSubsequence test...', (t) => {
    //Test 1
    let want = 4
    let got = longestPalindromeSubseq( "bbbab" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = longestPalindromeSubseq( "cbbd" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
