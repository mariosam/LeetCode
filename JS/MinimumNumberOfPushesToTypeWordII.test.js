/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumPushes } from './MinimumNumberOfPushesToTypeWordII.js'

TEST('Starting MinimumNumberOfPushesToTypeWordII test...', (t) => {
    //Test 1
    let want = 5
    let got = minimumPushes("abcde")
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = minimumPushes("xyzxyzxyzxyz")
    t.assert( want === got, "Expect: "+want)
    //Test 
    want = 24
    got = minimumPushes("aabbccddeeffgghhiiiiii")
    t.assert( want === got, "Expect: "+want)

    t.end()
})
