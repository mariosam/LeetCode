/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countTrapezoids } from './CountNumberOfTrapezoidsI.js'

TEST('Starting CountNumberOfTrapezoidsI test...', (t) => {
    //Test 1
    let want = 3
    let got = countTrapezoids( [[1,0],[2,0],[3,0],[2,2],[3,2]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = countTrapezoids( [[0,0],[1,0],[0,1],[2,1]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
