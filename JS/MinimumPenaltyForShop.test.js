/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { bestClosingTime } from './MinimumPenaltyForShop.js'

TEST('Starting MinimumPenaltyForShop test...', (t) => {
    //Test 1
    let want = 2
    let got = bestClosingTime( "YYNY" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = bestClosingTime( "NNNNN" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 4
    got = bestClosingTime( "YYYY" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
