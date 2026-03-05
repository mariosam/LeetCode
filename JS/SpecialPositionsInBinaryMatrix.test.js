/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numSpecial } from './SpecialPositionsInBinaryMatrix.js'

TEST('Starting SpecialPositionsInBinaryMatrix test...', (t) => {
    //Test 1
    let want = 1
    let got = numSpecial( [[1,0,0],[0,0,1],[1,0,0]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = numSpecial( [[1,0,0],[0,1,0],[0,0,1]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
