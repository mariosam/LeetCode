/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minCost } from './MinimumCostToMakeArrayEqual.js'

TEST('Starting MinimumCostToMakeArrayEqual test...', (t) => {
    //Test 1
    let want = 8
    let got = minCost( [1,3,5,2], [2,3,1,14] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = minCost( [2,2,2,2,2], [4,2,8,1,3] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
