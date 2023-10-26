/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { search } from './SearchInRotatedSortedArray.js'

TEST('Starting SearchInRotatedSortedArray test...', (t) => {
    //Test 1
    let want = 4
    let got = search( [4,5,6,7,0,1,2], 0 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = search( [4,5,6,7,0,1,2], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = -1
    got = search( [1], 0 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
