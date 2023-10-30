/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumTime } from './MinimumTimeToCompleteTrips.js'

TEST('Starting MinimumTimeToCompleteTrips test...', (t) => {
    //Test 1
    let want = 3
    let got = minimumTime( [1,2,3], 5 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = minimumTime( [2], 1 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
