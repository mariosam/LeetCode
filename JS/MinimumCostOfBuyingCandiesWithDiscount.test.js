/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumCost } from './MinimumCostOfBuyingCandiesWithDiscount.js'

TEST('Starting MinimumCostOfBuyingCandiesWithDiscount test...', (t) => {
    //Test 1
    let want = 5
    let got = minimumCost( [1,2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 23
    got = minimumCost( [6,5,7,9,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 10
    got = minimumCost( [5,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
