/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { subsetXORSum } from './SumOfAllSubsetXORTotals.js'

TEST('Starting SumOfAllSubsetXORTotals test...', (t) => {
    //Test 1
    let want = 6
    let got = subsetXORSum( [1,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 28
    got = subsetXORSum( [5,1,6] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 480
    got = subsetXORSum( [3,4,5,6,7,8] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
