/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countGoodStrings } from './CountWaysToBuildGoodStrings.js'

TEST('Starting CountWaysToBuildGoodStrings test...', (t) => {
    //Test 1
    let want = 8
    let got = countGoodStrings( 3, 3, 1, 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 5
    got = countGoodStrings( 2, 3, 1, 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
