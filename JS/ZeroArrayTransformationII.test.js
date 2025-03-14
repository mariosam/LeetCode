/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minZeroArray } from './ZeroArrayTransformationII.js'

TEST('Starting ZeroArrayTransformationII test...', (t) => {
    //Test 1
    let want = 2
    let got = minZeroArray( [2,0,2], [[0,2,1],[0,2,1],[1,1,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = minZeroArray( [4,3,2,1], [[1,3,2],[0,2,1]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
