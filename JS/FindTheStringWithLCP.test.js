/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findTheString } from './FindTheStringWithLCP.js'

TEST('Starting FindTheStringWithLCP test...', (t) => {
    //Test 1
    let want = "abab"
    let got = findTheString( [[4,0,2,0],[0,3,0,1],[2,0,2,0],[0,1,0,1]] )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "aaaa"
    got = findTheString( [[4,3,2,1],[3,3,2,1],[2,2,2,1],[1,1,1,1]] )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = ""
    got = findTheString( [[4,3,2,1],[3,3,2,1],[2,2,2,1],[1,1,1,3]] )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
