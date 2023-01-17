/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { minimumRounds } from './MinimumRoundsToCompleteAllTasks.js'

TEST('Starting MinimumRoundsToCompleteAllTasks test...', (t) => {
    //Test 1
    let want = 4
    let got = minimumRounds( [2,2,3,3,2,4,4,4,4,4] )
    t.assert( want === got, "Expect: 4")
    //Test 2
    want = -1
    got = minimumRounds( [2,3,3] )
    t.assert( want === got, "Expect: -1")
    //Test 3
    want = 20
    got = minimumRounds( [69,65,62,64,70,68,69,67,60,65,69,62,65,65,61,66,68,61,65,63,60,66,68,66,67,65,63,65,70,69,70,62,68,70,60,68,65,61,64,65,63,62,62,62,67,62,62,61,66,69] )
    t.assert( want === got, "Expect: 20")
    //Test 4
    want = -1
    got = minimumRounds( [1,2,1] )
    t.assert( want === got, "Expect: -1")

    t.end()
})
