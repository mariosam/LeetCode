/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { checkStrings } from './CheckifStringsCanBeMadeEqualWithOperationsII.js'

TEST('Starting CheckifStringsCanBeMadeEqualWithOperationsII test...', (t) => {
    //Test 1
    let want = true
    let got = checkStrings( "abcdba", "cabdab" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = false
    got = checkStrings( "abe", "bea" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
