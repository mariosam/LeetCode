/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { continuousSubarrays } from './ContinuousSubarrays.js'

TEST('Starting ContinuousSubarrays test...', (t) => {
    //Test 1
    let want = 8
    let got = continuousSubarrays( [5,4,2,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 6
    got = continuousSubarrays( [1,2,3] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
