/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { compress } from './StringCompression.js'

TEST('Starting StringCompression test...', (t) => {
    //Test 1
    let want = 6
    let got = compress( ['a', 'a', 'b', 'b', 'c', 'c', 'c'] )
    t.assert( want === got, "Expect: 6")
    //Test 2
    want = 1
    got = compress( ['a'] )
    t.assert( want === got, "Expect: 1")
    //Test 3
    want = 4
    got = compress( ['a', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b'] )
    t.assert( want === got, "Expect: 4")

    t.end()
})
 
