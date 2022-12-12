/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { twoSum } from './TwoSum.js'

TEST('Starting test...', (t) => {
    //Test 1
    let want = [0, 1]
    let got = twoSum( [2,7,11,15], 9 )
    t.assert( want.toString === got.toString, "Expect: 0, 1")
    //Test 2
    want = [1, 2]
    got = twoSum( [3,2,4], 6 )
    t.assert( want.toString === got.toString, "Expect: 1, 2")
    //Test 3
    want = [0, 1]
    got = twoSum( [3,3], 6 )
    t.assert( want.toString === got.toString, "Expect: 0, 1")

    t.end()
})
