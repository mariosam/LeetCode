/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxRunTime } from './MaximumRunningTimeOfComputers.js'

TEST('Starting MaximumRunningTimeOfComputers test...', (t) => {
    //Test 1
    let want = 4
    let got = maxRunTime( 2, [3,3,3] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 2
    got = maxRunTime( 2, [1,1,1,1] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
