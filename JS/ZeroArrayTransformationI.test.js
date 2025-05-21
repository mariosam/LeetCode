/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isZeroArray } from './ZeroArrayTransformationI.js'

TEST('Starting ZeroArrayTransformationI test...', (t) => {
    //Test 1
    let want = true
    let got = isZeroArray([1,0,1], [[0,2]])
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = isZeroArray([4,3,2,1], [[1,3],[0,2]])
    t.assert( want === got, "Expect: "+want)

    t.end()
})
