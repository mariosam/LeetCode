/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minCost } from './MinimumCostPathWithEdgeReversals.js'

TEST('Starting MinimumCostPathWithEdgeReversals test...', (t) => {
    //Test 1
    let want = 5
    let got = minCost( 4, [[0,1,3],[3,1,1],[2,3,4],[0,2,2]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = minCost( 4, [[0,2,1],[2,1,1],[1,3,1],[2,3,3]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
