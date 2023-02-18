/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { addToArrayForm } from './AddToArrayFormOfInteger.js'

TEST('Starting AddToArrayFormOfInteger test...', (t) => {
    //Test 1
    let want = [1,2,3,4]
    let got = addToArrayForm( [1,2,0,0], 34 )
    t.assert( want.toString === got.toString, "Expect: 1,2,3,4")
    //Test 2
    want = [4,5,5]
    got = addToArrayForm( [2,7,4], 181 )
    t.assert( want.toString === got.toString, "Expect: 4,5,5")
    //Test 3
    want = [1,0,2,1]
    got = addToArrayForm( [2,1,5], 806 )
    t.assert( want.toString === got.toString, "Expect: 1,0,2,1")
    //Test 4
    want = [1,2,6,3,0,7,1,7,1,9,7,5,6,6,4,4,0,5,7,9]
    got = addToArrayForm( [1,2,6,3,0,7,1,7,1,9,7,5,6,6,4,4,0,0,6,3], 516 )
    t.assert( want.toString === got.toString, "Expect: [1,2,6,3,0,7,1,7,1,9,7,5,6,6,4,4,0,5,7,9]")
    //Test 5
    want = [3,8,0,3,0,2,7,0,7,6,4,9,9,1,7,6,6,8,3,4]
    got = addToArrayForm( [3,8,0,3,0,2,7,0,7,6,4,9,9,1,7,6,6,1,6,4], 670 )
    t.assert( want.toString === got.toString, "Expect: [3,8,0,3,0,2,7,0,7,6,4,9,9,1,7,6,6,8,3,4]")
    //Test 6
    want = [4,2,0,5,3,5,7,4,7,3,4,1,8,5,5,4,8,0,8,5,8,6,2,0,0,3,7,4,7,0,8,8,7,0,5,9,7,6,3,7,9,5,4,3,6,6,3,4,0,6]
    got = addToArrayForm( [4,2,0,5,3,5,7,4,7,3,4,1,8,5,5,4,8,0,8,5,8,6,2,0,0,3,7,4,7,0,8,8,7,0,5,9,7,6,3,7,9,5,4,3,6,5,9,5,9,1], 3815 )
    t.assert( want.toString === got.toString, "Expect: [4,2,0,5,3,5,7,4,7,3,4,1,8,5,5,4,8,0,8,5,8,6,2,0,0,3,7,4,7,0,8,8,7,0,5,9,7,6,3,7,9,5,4,3,6,6,3,4,0,6]")

    t.end()
})
