/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findComplement } from './NumberComplement.js'

TEST('Starting NumberComplement test...', (t) => {
    //Test 1
    let want = 2
    let got = findComplement( 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = findComplement( 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
