/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { binaryGap } from './BinaryGap.js'

TEST('Starting BinaryGap test...', (t) => {
    //Test 1
    let want = 2
    let got = binaryGap( 22 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = binaryGap( 8 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
