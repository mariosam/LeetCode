/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isMonotonic } from './MonotonicArray.js'

TEST('Starting MonotonicArray test...', (t) => {
    //Test 1
    let want = true
    let got = isMonotonic( [1,2,2,3] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = true
    got = isMonotonic( [6,5,4,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = false
    got = isMonotonic( [1,3,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
