/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minPathSum } from './MinimumPathSum.js'

TEST('Starting MinimumPathSum test...', (t) => {
    //Test 1
    let want = 7
    let got = minPathSum( [[1,3,1],[1,5,1],[4,2,1]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = minPathSum( [[1,2,3],[4,5,6]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
