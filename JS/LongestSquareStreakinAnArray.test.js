/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestSquareStreak } from './LongestSquareStreakinAnArray.js'

TEST('Starting LongestSquareStreakinAnArray test...', (t) => {
    //Test 1
    let want = 3
    let got = longestSquareStreak( [4,3,6,16,8,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = longestSquareStreak( [2,3,5,6,7] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
