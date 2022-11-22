/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { searchInsert } from './SearchInsertPosition.js'

TEST('Starting SearchInsertPosition test...', (t) => {
    //Test 1
    let want = 2
    let got = searchInsert( [1,3,5,6], 5 )
    t.assert( want === got, "Expect: 2")
    //Test 2
    want = 1
    got = searchInsert( [1,3,5,6], 2 )
    t.assert( want === got, "Expect: 1")
    //Test 3
    want = 4
    got = searchInsert( [1,3,5,6], 7 )
    t.assert( want === got, "Expect: 4")

    t.end()
})
