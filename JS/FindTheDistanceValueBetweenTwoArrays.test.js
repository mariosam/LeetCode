/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findTheDistanceValue } from './FindTheDistanceValueBetweenTwoArrays.js'

TEST('Starting FindTheDistanceValueBetweenTwoArrays test...', (t) => {
    //Test 1
    let want = 2
    let got = findTheDistanceValue( [4,5,8], [10,9,1,8], 2 )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = findTheDistanceValue( [1,4,2,3], [-4,-3,6,10,20,30], 3 )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 1
    got = findTheDistanceValue( [2,1,100,3], [-5,-2,10,-3,7], 6 )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
