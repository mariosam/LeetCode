/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { simplifyPath } from './SimplifyPath.js'

TEST('Starting SimplifyPath test...', (t) => {
    //Test 1
    let want = "/home"
    let got = simplifyPath( "/home/" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "/"
    got = simplifyPath( "/../" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = "/home/foo"
    got = simplifyPath( "/home//foo/" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
