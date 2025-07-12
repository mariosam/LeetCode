/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxFreeTime } from './RescheduleMeetingsForMaximumFreeTimeII.js'

TEST('Starting RescheduleMeetingsForMaximumFreeTimeII test...', (t) => {
    //Test 1
    let want = 2
    let got = maxFreeTime( 5, [1,3], [2,5] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 7
    got = maxFreeTime( 10, [0,7,9], [1,8,10] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 6
    got = maxFreeTime( 10, [0,3,7,9], [1,4,8,10] )
    t.assert( want === got, "Expect: "+want)
    //Test 4
    want = 0
    got = maxFreeTime( 5, [0,1,2,3,4], [1,2,3,4,5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
