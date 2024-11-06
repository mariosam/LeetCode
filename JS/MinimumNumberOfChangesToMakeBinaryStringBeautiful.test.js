/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minChanges } from './MinimumNumberOfChangesToMakeBinaryStringBeautiful.js'

TEST('Starting MinimumNumberOfChangesToMakeBinaryStringBeautiful test...', (t) => {
    //Test 1
    let want = 2
    let got = minChanges("1001")
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = minChanges("10")
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = minChanges("0000")
    t.assert( want === got, "Expect: "+want)

    t.end()
})
