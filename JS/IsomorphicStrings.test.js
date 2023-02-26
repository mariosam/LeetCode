/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { isIsomorphic } from './IsomorphicStrings.js'

TEST('Starting IsomorphicStrings test...', (t) => {
    //Test 1
    let want = true
    let got = isIsomorphic( "egg", "add" )
    t.assert( want === got, "Expect: true")
    //Test 2
    want = false
    got = isIsomorphic( "foo", "bar" )
    t.assert( want === got, "Expect: false")
    //Test 3
    want = true
    got = isIsomorphic( "paper", "title" )
    t.assert( want === got, "Expect: true")

    t.end()
})
