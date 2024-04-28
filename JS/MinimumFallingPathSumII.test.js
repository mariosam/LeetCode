/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minFallingPathSum } from './MinimumFallingPathSumII.js'

TEST('Starting MinimumFallingPathSumII test...', (t) => {
    //Test 1
    let want = 13
    let got = minFallingPathSum( [[1,2,3],[4,5,6],[7,8,9]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 7
    got = minFallingPathSum( [[7]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
