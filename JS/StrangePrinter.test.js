/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { strangePrinter } from './StrangePrinter.js'

TEST('Starting StrangePrinter test...', (t) => {
    //Test 1
    let want = 2
    let got = strangePrinter( "aaabbb" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 2
    got = strangePrinter( "aba" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
 
