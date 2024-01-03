/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { change } from './CoinChangeII.js'

TEST('Starting CoinChangeII test...', (t) => {
    //Test 1
    let want = 4
    let got = change( 5, [1,2,5] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 0
    got = change( 3, [2] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = 1
    got = change( 10, [10] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
