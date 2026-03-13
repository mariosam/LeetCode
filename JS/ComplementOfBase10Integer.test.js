/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { bitwiseComplement } from './ComplementOfBase10Integer.js'

TEST('Starting ComplementOfBase10Integer test...', (t) => {
    //Test 1
    let want = 2
    let got = bitwiseComplement( 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = bitwiseComplement( 7 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 5
    got = bitwiseComplement( 10 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
