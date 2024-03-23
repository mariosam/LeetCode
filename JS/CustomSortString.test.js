/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { customSortString } from './CustomSortString.js'

TEST('Starting CustomSortString test...', (t) => {
    //Test 1
    let want = "cbad"
    let got = customSortString( "cba", "abcd" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = "bcad"
    got = customSortString( "bcafg", "abcd" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
