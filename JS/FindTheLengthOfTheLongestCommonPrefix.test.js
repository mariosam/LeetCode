/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestCommonPrefix } from './FindTheLengthOfTheLongestCommonPrefix.js'

TEST('Starting FindTheLengthOfTheLongestCommonPrefix test...', (t) => {
    //Test 1
    let want = 3
    let got = longestCommonPrefix( [1,10,100], [1000] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = longestCommonPrefix( [1,2,3], [4,4,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
