/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { searchMatrix } from './Search2DMatrix.js'

TEST('Starting Search2DMatrix test...', (t) => {
    //Test 1
    let want = true
    let got = searchMatrix( [[1,3,5,7],[10,11,16,20],[23,30,34,60]], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = searchMatrix( [[1,3,5,7],[10,11,16,20],[23,30,34,60]], 13 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
