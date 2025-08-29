/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { sortMatrix } from './SortMatrixByDiagonals.js'

TEST('Starting SortMatrixByDiagonals test...', (t) => {
    //Test 1
    let want = [[8,2,3],[9,6,7],[4,5,1]]
    let got = sortMatrix( [[1,7,3],[9,8,2],[4,5,6]] )
    t.assert( want.toString === got.toString, "Expect: "+JSON.stringify(want))
    //Test 2
    want = [[2,1],[1,0]]
    got = sortMatrix( [[0,1],[1,2]] )
    t.assert( want.toString === got.toString, "Expect: "+JSON.stringify(want))
    //Test 3
    want = [[1]]
    got = sortMatrix( [[1]] )
    t.assert( want.toString === got.toString, "Expect: "+JSON.stringify(want))

    t.end()
})
