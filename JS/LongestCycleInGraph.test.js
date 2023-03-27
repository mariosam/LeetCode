/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { longestCycle } from './LongestCycleInGraph.js'

TEST('Starting LongestCycleInGraph test...', (t) => {
    //Test 1
    let want = 3
    let got = longestCycle( [3,3,4,2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = longestCycle( [2,-1,3,1] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
  
