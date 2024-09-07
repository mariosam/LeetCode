/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { missingRolls } from './FindMissingObservations.js'

TEST('Starting FindMissingObservations test...', (t) => {
    //Test 1
    let want = [6,6]
    let got = missingRolls( [3,2,4,3], 4, 2 )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [2,3,2,2]
    got = missingRolls( [1,5,6], 3, 4 )
    t.assert( want.toString == got.toString, "Expect: "+want)
    //Test 3
    want = []
    got = missingRolls( [1,2,3,4], 6, 4 )
    t.assert( want.toString == got.toString, "Expect: "+want)

    t.end()
})
