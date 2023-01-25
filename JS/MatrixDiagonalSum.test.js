/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { diagonalSum } from './MatrixDiagonalSum.js'

TEST('Starting MatrixDiagonalSum test...', (t) => {
    //Test 1
    let want = 25
    let got = diagonalSum( [[1,2,3],[4,5,6],[7,8,9]] )
    t.assert( want === got, "Expect: 25")
    //Test 2
    want = 8
    got = diagonalSum( [[1,1,1,1],[1,1,1,1],[1,1,1,1],[1,1,1,1]] )
    t.assert( want === got, "Expect: 8")
    //Test 3
    want = 5
    got = diagonalSum( [[5]] )
    t.assert( want === got, "Expect: 5")

    t.end()
})
