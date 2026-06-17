/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { processStr } from './ProcessStringWithSpecialOperationsI.js'

TEST('Starting ProcessStringWithSpecialOperationsI test...', (t) => {
    //Test 1
    let want = "ba"
    let got = processStr( "a#b%*" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = ""
    got = processStr( "z*#" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
