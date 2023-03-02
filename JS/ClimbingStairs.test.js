/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { climbStairs } from './ClimbingStairs.js'

TEST('Starting ClimbingStairs test...', (t) => {
    //Test 1
    let want = 3
    let got = climbStairs( 3 )
    t.assert( want === got, "Expect: 3")
    //Test 2
    want = 2
    got = climbStairs( 2 )
    t.assert( want === got, "Expect: 2")
    //Test 3
    want = 1
    got = climbStairs( 1 )
    t.assert( want === got, "Expect: 1")

    t.end()
})
