/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { findContentChildren } from './AssignCookies.js'

TEST('Starting AssignCookies test...', (t) => {
    //Test 1
    let want = 1
    let got = findContentChildren( [1,2,3], [1,1] )
    t.assert( want.toString === got.toString, "Expect: "+want)
    //Test 2
    want = 2
    got = findContentChildren( [1,2], [1,2,3] )
    t.assert( want.toString === got.toString, "Expect: "+want)

    t.end()
})
