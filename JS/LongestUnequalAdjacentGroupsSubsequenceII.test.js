/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { getWordsInLongestSubsequence } from './LongestUnequalAdjacentGroupsSubsequenceII.js'

TEST('Starting LongestUnequalAdjacentGroupsSubsequenceII test...', (t) => {
    //Test 1
    let want = ["bab","cab"]
    let got = getWordsInLongestSubsequence( ["bab","dab","cab"], [1,2,2] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = ["a","b","c","d"]
    got = getWordsInLongestSubsequence( ["a","b","c","d"], [1,2,3,4] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
