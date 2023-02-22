/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { singleNonDuplicate } from './SingleElementInSortedArray.js'

TEST('Starting SingleElementInSortedArray test...', (t) => {
    //Test 1
    let want = 2
    let got = singleNonDuplicate( [1,1,2,3,3,4,4,8,8] )
    t.assert( want === got, "Expect: 2")
    //Test 2
    want = 10
    got = singleNonDuplicate( [3,3,7,7,10,11,11] )
    t.assert( want === got, "Expect: 10")
    //Test 3
    want = 1
    got = singleNonDuplicate( [1,2,2,3,3] )
    t.assert( want === got, "Expect: 1")
    //Test 4
    want = 2
    got = singleNonDuplicate( [1,1,2] )
    t.assert( want === got, "Expect: 2")

    t.end()
})
