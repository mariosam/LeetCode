/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findLongestChain } from './MaximumLengthOfPairChain.js'

TEST('Starting MaximumLengthOfPairChain test...', (t) => {
    //Test 1
    let want = 2
    let got = findLongestChain( [[1,2],[2,3],[3,4]] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 3
    got = findLongestChain( [[1,2],[7,8],[4,5]] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
