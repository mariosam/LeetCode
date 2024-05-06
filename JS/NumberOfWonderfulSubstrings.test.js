/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { wonderfulSubstrings } from './NumberOfWonderfulSubstrings.js'

TEST('Starting NumberOfWonderfulSubstrings test...', (t) => {
    //Test 1
    let want = 4
    let got = wonderfulSubstrings( "aba" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 9
    got = wonderfulSubstrings( "aabb" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 2
    got = wonderfulSubstrings( "he" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
