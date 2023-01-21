/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isSameTree } from './SameTree.js'

TEST('Starting SameTree test...', (t) => {
    //Test 1
    let want = true
    let got = isSameTree( [1,2,3], [1,2,3] )
    t.assert( want.toString === got.toString, "Expect: true")
    //Test 2
    want = false
    got = isSameTree( [], [1] )
    t.assert( want.toString === got.toString, "Expect: false")
    //Test 3
    want = false
    got = isSameTree( [1], [2] )
    t.assert( want.toString === got.toString, "Expect: false")

    t.end()
})
