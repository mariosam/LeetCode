/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximalRectangle } from './MaximalRectangle.js'

TEST('Starting MaximalRectangle test...', (t) => {
    //Test 1
    let want = 6
    let got = maximalRectangle( [["1","0","1","0","0"],["1","0","1","1","1"],["1","1","1","1","1"],["1","0","0","1","0"]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = maximalRectangle( [["0"]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 1
    got = maximalRectangle( [["1"]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
