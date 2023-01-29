/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxIceCream } from './MaximumIceCreamBars.js'

TEST('Starting MaximumIceCreamBars test...', (t) => {
    //Test 1
    let want = 4
    let got = maxIceCream( [1,6,3,1,2,5], 7 )
    t.assert( want === got, "Expect: 4")
    //Test 2
    want = 0
    got = maxIceCream( [10,6,8,7,7,8], 5 )
    t.assert( want === got, "Expect: 0")
    //Test 3
    want = 6
    got = maxIceCream( [1,6,3,1,2,5], 20 )
    t.assert( want === got, "Expect: 6")
    //Test 4
    want = 9
    got = maxIceCream( [7,3,3,6,6,6,10,5,9,2], 56 )
    t.assert( want === got, "Expect: 9")
    //Test 5
    want = 4
    got = maxIceCream( [10,2,10,10,10,10,8,2,7,8], 25 )
    t.assert( want === got, "Expect: 4")

    t.end()
})
