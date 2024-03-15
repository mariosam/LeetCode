/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { pivotInteger } from './FindThePivotInteger.js'

TEST('Starting FindThePivotInteger test...', (t) => {
    //Test 1
    let want = 6
    let got = pivotInteger( 8 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = pivotInteger( 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = pivotInteger( 4 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
