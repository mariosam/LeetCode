/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { plusOne } from './PlusOne.js'

TEST('Starting PlusOne test...', (t) => {
    //Test 1
    let want = [1,2,4]
    let got = plusOne( [1,2,3] )
    t.assert( want.toString === got.toString, "Expect: 1,2,4")
    //Test 2
    want = [4,3,2,2]
    got = plusOne( [4,3,2,1] )
    t.assert( want.toString === got.toString, "Expect: 4,3,2,2")
    //Test 3
    want = [1,0]
    got = plusOne( [9] )
    t.assert( want.toString === got.toString, "Expect: 1,0")
    //Test 4
    want = [5,0,0,0]
    got = plusOne( [4,9,9,9] )
    t.assert( want.toString === got.toString, "Expect: 5,0,0,0")
    //Test 5
    want = [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,7]
    got = plusOne( [7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,6] )
    t.assert( want.toString === got.toString, "Expect: 7,2,8,5,0,9,1,2,9,5,3,6,6,7,3,2,8,4,3,7,9,5,7,7,4,7,4,9,4,7,0,1,1,1,7,4,0,0,7")
    //Test 6
    want = [1,0,0,0]
    got = plusOne( [9,9,9] )
    t.assert( want.toString === got.toString, "Expect: 1,0,0,0")

    t.end()
})
