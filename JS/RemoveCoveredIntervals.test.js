/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { removeCoveredIntervals } from './RemoveCoveredIntervals.js'

TEST('Starting RemoveCoveredIntervals test...', (t) => {
    //Test 1
    let want = 2
    let got = removeCoveredIntervals( [[1,4],[3,6],[2,8]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = removeCoveredIntervals( [[1,4],[2,3]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
