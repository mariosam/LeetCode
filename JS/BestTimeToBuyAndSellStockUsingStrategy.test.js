/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxProfit } from './BestTimeToBuyAndSellStockUsingStrategy.js'

TEST('Starting BestTimeToBuyAndSellStockUsingStrategy test...', (t) => {
    //Test 1
    let want = 10
    let got = maxProfit( [4,2,8], [-1,0,1], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 9
    got = maxProfit( [5,4,3], [1,1,0], 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
