/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximum69Number } from './Maximum69Number.js'

TEST('Starting Maximum69Number test...', (t) => {
    //Test 1
    let want = 9969
    let got = maximum69Number( 9669 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 9999
    got = maximum69Number( 9996 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 9999
    got = maximum69Number( 9999 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
