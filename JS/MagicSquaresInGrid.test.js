/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numMagicSquaresInside } from './MagicSquaresInGrid.js'

TEST('Starting MagicSquaresInGrid test...', (t) => {
    //Test 1
    let want = 1
    let got = numMagicSquaresInside( [[4,3,8,4],[9,5,1,9],[2,7,6,2]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = numMagicSquaresInside( [[8]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
