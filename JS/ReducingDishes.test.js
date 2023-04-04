/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { maxSatisfaction } from './ReducingDishes.js'

TEST('Starting ReducingDishes test...', (t) => {
    //Test 1
    let want = 14
    let got = maxSatisfaction( [-1,-8,0,5,-9] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 20
    got = maxSatisfaction( [4,3,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = maxSatisfaction( [-1,-4,-5] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
