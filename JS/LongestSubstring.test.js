/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { lengthOfLongestSubstring } from './LongestSubstring.js'

TEST('Starting LongestSubstring test...', (t) => {
    //Test 1
    let want = 3
    let got = lengthOfLongestSubstring( "dvdf" )
    t.assert( want === got, "Expect: 3")
    //Test 2
    want = 1
    got = lengthOfLongestSubstring( "bbbbb" )
    t.assert( want === got, "Expect: 1")
    //Test 3
    want = 3
    got = lengthOfLongestSubstring( "pwwkew" )
    t.assert( want === got, "Expect: 3")
    //Test 4
    want = 3
    got = lengthOfLongestSubstring( "abcabcbb" )
    t.assert( want === got, "Expect: 3")
    //Test 5
    want = 2
    got = lengthOfLongestSubstring( "abba" )
    t.assert( want === got, "Expect: 2")
    //Test 6
    want = 3
    got = lengthOfLongestSubstring( "abccb" )
    t.assert( want === got, "Expect: 3")
    //Test 7
    want = 3
    got = lengthOfLongestSubstring( "abccba" )
    t.assert( want === got, "Expect: 3")
    //Test 8
    want = 6
    got = lengthOfLongestSubstring( "professor" )
    t.assert( want === got, "Expect: 6")
    //Test 9
    want = 11
    got = lengthOfLongestSubstring( "salmonserbic" )
    t.assert( want === got, "Expect: 11")
    //Test 10
    want = 7
    got = lengthOfLongestSubstring( "salmonsalmosalmonella" )
    t.assert( want === got, "Expect: 7")

    t.end()
})
 
