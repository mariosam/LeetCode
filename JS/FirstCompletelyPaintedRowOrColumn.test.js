/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { firstCompleteIndex } from './FirstCompletelyPaintedRowOrColumn.js'

TEST('Starting FirstCompletelyPaintedRowOrColumn test...', (t) => {
    //Test 1
    let want = 2
    let got = firstCompleteIndex( [1,3,4,2], [[1,4],[2,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = firstCompleteIndex( [2,8,7,4,1,3,5,6,9], [[3,2,5],[1,4,6],[8,7,9]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
