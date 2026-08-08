/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findMissingElements } from './FindMissingElements.js'

TEST('Starting FindMissingElements test...', (t) => {
    //Test 1
    let want = [3]
    let got = findMissingElements( [1,4,2,5] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = []
    got = findMissingElements( [7,8,6,9] )
    t.assert( want.toString == got.toString, "Expect: "+want)
    //Test 3
    want = [2,3,4]
    got = findMissingElements( [5,1] )
    t.assert( want.toString == got.toString, "Expect: "+want)

    t.end()
})
