/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minCost } from './MinimumCostPathWithTeleportations.js'

TEST('Starting MinimumCostPathWithTeleportations test...', (t) => {
    //Test 1
    let want = 7
    let got = minCost( [[1,3,3],[2,5,4],[4,3,5]], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 9
    got = minCost( [[1,2],[2,3],[3,4]], 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
