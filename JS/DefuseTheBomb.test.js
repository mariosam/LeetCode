/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { decrypt } from './DefuseTheBomb.js'

TEST('Starting DefuseTheBomb test...', (t) => {
    //Test 1
    let want = [12,10,16,13]
    let got = decrypt( [5,7,1,4], 3 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [0,0,0,0]
    got = decrypt( [1,2,3,4], 0 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = [12,5,6,13]
    got = decrypt( [2,4,9,3], -2 )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
