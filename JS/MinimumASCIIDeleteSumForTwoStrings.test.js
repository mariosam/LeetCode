/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumDeleteSum } from './MinimumASCIIDeleteSumForTwoStrings.js'

TEST('Starting MinimumASCIIDeleteSumForTwoStrings test...', (t) => {
    //Test 1
    let want = 231
    let got = minimumDeleteSum( "sea", "eat" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 403
    got = minimumDeleteSum( "delete", "leet" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
