/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minSwaps } from './MinimumNumberOfSwapsToMakeTheStringBalanced.js'

TEST('Starting MinimumNumberOfSwapsToMakeTheStringBalanced test...', (t) => {
    //Test 1
    let want = 1
    let got = minSwaps( "][][" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = minSwaps( "]]][[[" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = minSwaps( "[]" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
