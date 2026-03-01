/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { concatenatedBinary } from './ConcatenationOfConsecutiveBinaryNumbers.js'

TEST('Starting ConcatenationOfConsecutiveBinaryNumbers test...', (t) => {
    //Test 1
    let want = 1
    let got = concatenatedBinary( 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 27
    got = concatenatedBinary( 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 505379714
    got = concatenatedBinary( 12 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
