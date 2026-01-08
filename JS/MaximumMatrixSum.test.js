/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxMatrixSum } from './MaximumMatrixSum.js'

TEST('Starting MaximumMatrixSum test...', (t) => {
    //Test 1
    let want = 4
    let got = maxMatrixSum( [[1,-1],[-1,1]] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 16
    got = maxMatrixSum( [[1,-1],[-1,1]] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
