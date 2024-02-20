/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isPowerOfTwo } from './PowerOfTwo.js'

TEST('Starting PowerOfTwo test...', (t) => {
    //Test 1
    let want = true
    let got = isPowerOfTwo( 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = isPowerOfTwo( 16 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = isPowerOfTwo( 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
