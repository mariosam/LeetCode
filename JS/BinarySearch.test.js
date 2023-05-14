/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { search } from './BinarySearch.js'

TEST('Starting BinarySearch test...', (t) => {
    //Test 1
    let want = 4
    let got = search( [-1,0,3,5,9,12], 9 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = -1
    got = search( [-1,0,3,5,9,12], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = search( [5], 5 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
