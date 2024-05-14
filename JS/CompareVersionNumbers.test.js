/**
 * @version JAVASCRIPT ECMAScript 6 
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ node NomeDaClasse.test
 */
import TEST from 'tape'
import { compareVersion } from './CompareVersionNumbers.js'

TEST('Starting CompareVersionNumbers test...', (t) => {
    //Test 1
    let want = -1
    let got = compareVersion( "1.2", "1.10" )
    t.assert( want === got, "Expect: "+want)
    //Test 2
    want = 0
    got = compareVersion( "1.01", "1.001" )
    t.assert( want === got, "Expect: "+want)
    //Test 3
    want = 0
    got = compareVersion( "1.0", "1.0.0.0" )
    t.assert( want === got, "Expect: "+want)

    t.end()
})
