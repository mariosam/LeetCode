/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { zeroFilledSubarray } from './NumberOfZeroFilledSubarrays.js'

TEST('Starting NumberOfZeroFilledSubarrays test...', (t) => {
    //Test 1
    let want = 6
    let got = zeroFilledSubarray( [1,3,0,0,2,0,0,4] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 9
    got = zeroFilledSubarray( [0,0,0,2,0,0] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
