/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxScoreWords } from './MaximumScoreWordsFormedByLetters.js'

TEST('Starting MaximumScoreWordsFormedByLetters test...', (t) => {
    //Test 1
    let want = 23
    let got = maxScoreWords( ["dog","cat","dad","good"], ["a","a","c","d","d","d","g","o","o"], [1,0,9,5,0,0,3,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 27
    got = maxScoreWords( ["xxxz","ax","bx","cx"], ["z","a","b","c","x","x","x"], [4,4,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,0,10] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = maxScoreWords( ["leetcode"], ["l","e","t","c","o","d"], [0,0,1,1,1,0,0,0,0,0,0,1,0,0,1,0,0,0,0,1,0,0,0,0,0,0] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
