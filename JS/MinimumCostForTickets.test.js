/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { mincostTickets } from './MinimumCostForTickets.js'

TEST('Starting MinimumCostForTickets test...', (t) => {
    //Test 1
    let want = 11
    let got = mincostTickets( [1,4,6,7,8,20], [2,7,15] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 17
    got = mincostTickets( [1,2,3,4,5,6,7,8,9,10,30,31], [2,7,15] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
