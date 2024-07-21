/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { restoreMatrix } from './FindValidMatrixGivenRowAndColumnSums.js'

TEST('Starting FindValidMatrixGivenRowAndColumnSums test...', (t) => {
    //Test 1
    let want = [[3,0],[1,7]]
    let got = restoreMatrix( [3,8], [4,7] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [[0,5,0],[6,1,0],[2,0,8]]
    got = restoreMatrix( [5,7,10], [8,6,8] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
