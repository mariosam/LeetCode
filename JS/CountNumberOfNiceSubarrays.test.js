/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { numberOfSubarrays } from './CountNumberOfNiceSubarrays.js'

TEST('Starting CountNumberOfNiceSubarrays test...', (t) => {
    //Test 1
    let want = 2
    let got = numberOfSubarrays( [1,1,2,1,1], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = numberOfSubarrays( [2,4,6], 1 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 16
    got = numberOfSubarrays( [2,2,2,1,2,2,1,2,2,2], 2 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
