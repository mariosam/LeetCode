/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxProfit } from './BestTimeToBuyAndSellStock.js'

TEST('Starting BestTimeToBuyAndSellStock test...', (t) => {
    //Test 1
    let want = 8
    let got = maxProfit( [1,3,2,8,4,9], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = maxProfit( [1,3,7,5,10,3], 3 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
