/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { furthestDistanceFromOrigin } from './FurthestPointFromOrigin.js'

TEST('Starting FurthestPointFromOrigin test...', (t) => {
    //Test 1
    let want = 3
    let got = furthestDistanceFromOrigin( "L_RL__R" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 5
    got = furthestDistanceFromOrigin( "_R__LL_" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 7
    got = furthestDistanceFromOrigin( "_______" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
