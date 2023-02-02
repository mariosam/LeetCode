/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { containsDuplicate } from './ContainsDuplicate.js'

TEST('Starting ContainsDuplicate test...', (t) => {
    //Test 1
    let want = true
    let got = containsDuplicate( [1,2,3,1] )
    t.assert( want === got, "Expect: true")
    //Test 2
    want = false
    got = containsDuplicate( [1,2,3,4] )
    t.assert( want === got, "Expect: false")
    //Test 3
    want = true
    got = containsDuplicate( [1,1,1,3,3,4,3,2,4,2] )
    t.assert( want === got, "Expect: true")

    t.end()
})
