/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumPushes } from './MinimumNumberOfPushesToTypeWordI.js'

TEST('Starting MinimumNumberOfPushesToTypeWordI test...', (t) => {
    //Test 1
    let want = 5
    let got = minimumPushes("abcde")
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 12
    got = minimumPushes("xycdefghij")
    t.assert( want === got, "Expect: "+want)

    t.end()
})
