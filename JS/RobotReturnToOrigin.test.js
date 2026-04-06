/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { judgeCircle } from './RobotReturnToOrigin.js'

TEST('Starting RobotReturnToOrigin test...', (t) => {
    //Test 1
    let want = true
    let got = judgeCircle( "UD" )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = false
    got = judgeCircle( "LL" )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
