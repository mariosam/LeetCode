/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findRelativeRanks } from './RelativeRanks.js'

TEST('Starting RelativeRanks test...', (t) => {
    //Test 1
    let want = ["Gold Medal","Silver Medal","Bronze Medal","4","5"]
    let got = findRelativeRanks( [5,4,3,2,1] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = ["Gold Medal","5","Bronze Medal","Silver Medal","4"]
    got = findRelativeRanks( [10,3,8,9,4] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
