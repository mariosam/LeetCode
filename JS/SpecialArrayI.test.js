/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isArraySpecial } from './SpecialArrayI.js'

TEST('Starting SpecialArrayI test...', (t) => {
    //Test 1
    let want = true
    let got = isArraySpecial( [1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = isArraySpecial( [2,1,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = isArraySpecial( [4,3,1,6] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
