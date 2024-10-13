/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minGroups } from './DivideIntervalsIntoMinimumNumberOfGroups.js'

TEST('Starting DivideIntervalsIntoMinimumNumberOfGroups test...', (t) => {
    //Test 1
    let want = 3
    let got = minGroups([[5,10],[6,8],[1,5],[2,3],[1,10]])
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 1
    got = minGroups([[1,3],[5,6],[8,10],[11,13]])
    t.assert( want === got, "Expect: "+want)

    t.end()
})
