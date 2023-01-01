/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { majorityElement } from './MajorityElement.js'

TEST('Starting MajorityElement test...', (t) => {
    //Test 1
    let want = 3
    let got = majorityElement( [3,2,3] )
    t.assert( want === got, "Expect: 3")
    //Test 2
    want = 2
    got = majorityElement( [2,2,1,1,1,2,2] )
    t.assert( want === got, "Expect: 2")

    t.end()
})
