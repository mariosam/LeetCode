/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxSumTrionic } from './TrionicArrayII.js'

TEST('Starting TrionicArrayII test...', (t) => {
    //Test 1
    let want = -4
    let got = maxSumTrionic( [0,-2,-1,-3,0,2,-1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 14
    got = maxSumTrionic( [1,4,2,7] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
