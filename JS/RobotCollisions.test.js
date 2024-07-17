/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { survivedRobotsHealths } from './RobotCollisions.js'

TEST('Starting RobotCollisions test...', (t) => {
    //Test 1
    let want = [2,17,9,15,10]
    let got = survivedRobotsHealths( [5,4,3,2,1], [2,17,9,15,10], "RRRRR" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = [14]
    got = survivedRobotsHealths( [3,5,2,6], [10,10,15,12], "RLRL" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 3
    want = []
    got = survivedRobotsHealths( [1,2,5,6], [10,10,11,11], "RLRL" )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
