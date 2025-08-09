/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { totalFruit } from './FruitIntoBaskets.js'

TEST('Starting FruitIntoBaskets test...', (t) => {
    //Test 1
    let want = 3
    let got = totalFruit( [1,2,1] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 3
    got = totalFruit( [0,1,2,2] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 4
    got = totalFruit( [1,2,3,2,2] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
