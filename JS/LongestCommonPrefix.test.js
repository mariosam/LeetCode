/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestCommonPrefix } from './LongestCommonPrefix.js'

TEST('Starting LongestCommonPrefix test...', (t) => {
    //Test 1
    let want = "fl"
    let got = longestCommonPrefix( ["flower","flow","flight"] )
    t.assert( want === got, "Expect: fl")
    //Test 2
    want = ""
    got = longestCommonPrefix( ["dog","racecar","car"] )
    t.assert( want === got, "Expect: vazio")
    //Test 3
    want = "a"
    got = longestCommonPrefix( ["a"] )
    t.assert( want === got, "Expect: a")

    t.end()
})
