/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { countSubarrays } from './CountSubarraysWithFixedBounds.js'

TEST('Starting CountSubarraysWithFixedBounds test...', (t) => {
    //Test 1
    let want = 2
    let got = countSubarrays( [1, 3, 5, 2, 7, 5], 1, 5 )
    t.assert( want === got, "Expect: 2")
    //Test 2
    want = 10
    got = countSubarrays( [1, 1, 1, 1], 1, 1 )
    t.assert( want === got, "Expect: 10")

    t.end()
})
