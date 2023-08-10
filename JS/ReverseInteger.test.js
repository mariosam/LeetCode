/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { reverse } from './ReverseInteger.js'

TEST('Starting ReverseInteger test...', (t) => {
    //Test 1
    let want = 321
    let got = reverse( 123 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -321
    got = reverse( -123 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 21
    got = reverse( 120 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
