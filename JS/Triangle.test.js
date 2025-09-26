/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumTotal } from './Triangle.js'

TEST('Starting Triangle test...', (t) => {
    //Test 1
    let want = 11
    let got = minimumTotal( [[2],[3,4],[6,5,7],[4,1,8,3]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -10
    got = minimumTotal( [[-10]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
