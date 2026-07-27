/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maximumProduct } from './MaximumProductOfThreeNumbers.js'

TEST('Starting MaximumProductOfThreeNumbers test...', (t) => {
    //Test 1
    let want = 6
    let got = maximumProduct( [1, 2, 3] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 24
    got = maximumProduct( [1, 2, 3, 4] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = -6
    got = maximumProduct( [-1, -2, -3] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
