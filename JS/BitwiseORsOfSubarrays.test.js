/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { subarrayBitwiseORs } from './BitwiseORsOfSubarrays.js'

TEST('Starting BitwiseORsOfSubarrays test...', (t) => {
    //Test 1
    let want = 1
    let got = subarrayBitwiseORs( [0] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = subarrayBitwiseORs( [1,1,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 6
    got = subarrayBitwiseORs( [1,2,4] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
