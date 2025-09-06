/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { makeTheIntegerZero } from './MinimumOperationsToMakeTheIntegerZero.js'

TEST('Starting MinimumOperationsToMakeTheIntegerZero test...', (t) => {
    //Test 1
    let want = 3
    let got = makeTheIntegerZero( 3, -2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = makeTheIntegerZero( 5, 7 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
