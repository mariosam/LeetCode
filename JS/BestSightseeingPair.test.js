/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxScoreSightseeingPair } from './BestSightseeingPair.js'

TEST('Starting BestSightseeingPair test...', (t) => {
    //Test 1
    let want = 11
    let got = maxScoreSightseeingPair( [8,1,5,2,6] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = maxScoreSightseeingPair( [1,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
