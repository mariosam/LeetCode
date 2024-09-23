/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findKthNumber } from './KthSmallestInLexicographicalOrder.js'

TEST('Starting KthSmallestInLexicographicalOrder test...', (t) => {
    //Test 1
    let want = 10
    let got = findKthNumber( 13, 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = findKthNumber( 1, 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
